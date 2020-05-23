import os
import pandas
import pyodbc
import settings
import mysql.connector
from sqlalchemy import create_engine
import dateutil


def get_file(pathfile, extension='xlsx'):  # Ouverture du fichier excel
    liste_files = []
    liste_files = os.listdir(pathfile)
    for file in liste_files:
        if file.endswith(extension):  # endswith : fin de la chaine
            return pathfile+"/"+file


def import_data_to_temp(filename,
                        tablename,
                        table_columns,
                        parse_columns=None):

    # filename = get_file(settings.pathfile)
    # print(filename)

    cnx = mysql.connector.connect(host=settings.Server,
                                  user=settings.User,
                                  password=settings.Password,
                                  database=settings.Database)

    cursor = cnx.cursor()
    df = pandas.read_excel(
        filename,
        names=table_columns,
        encoding='utf-8',
        parse_cols=parse_columns)

    engine = create_engine('mysql+mysqlconnector://'+settings.User+':' +
                           settings.Password+'@'+settings.Server +
                           '/'+settings.Database, echo=False)

    try:
        df.to_sql(name=tablename, con=engine, if_exists='replace', index=False)
        cursor.execute("select count(*) as nombre_lignes from " + tablename)
        nb = int(cursor.fetchone()[0])
        print("nombre de lignes pour la table " + tablename + ":"+str(nb))

    except Exception as e:
        print(str(e))


def temp2prod(tablename):

    cnx = mysql.connector.connect(
        host=settings.Server,
        user=settings.User,
        database=settings.Database,
        password=settings.Password)
    cursor = cnx.cursor()

# commande
    if tablename == "commande":
        query = "INSERT INTO commande (N_commande) \
                SELECT distinct Commande\
                FROM temp_commande \
                where commande is not null"
        print("table commande ==> OK")

# Operation
    elif tablename == "operation":
        query = "INSERT INTO operation (Id_marketplace, N_commande, \
                               Date_operation, \
                               Type_Operation,Status_Commande, \
                               Status_paiement,Date_paiement, \
                               Montant_vente, Reglement_cdiscount,\
                               N_facture, Date_Facture, \
                               Comission_sansFrais_trairement, \
                               Total_sansFrais_Traitement) \
                   SELECT '1' as Id_marketplace, Reference_commande, \
                          STR_TO_DATE(Date ,'%d/%m/%Y'),\
                          Type_Operation, Statut_commande, Statut_paiement, \
                          STR_TO_DATE(Date_paiement,'%d/%m/%Y'), \
                          Montant_total, Reglement_CDISCOUNT,\
                          N_facture, STR_TO_DATE(Date_de_Facture,'%d/%m/%Y'), \
                          commission_sans_frais_traitement, \
                          total_sans_frais_traitement \
                   FROM temp_suivie_vente"
        print("table operation ==> OK")

# Article
    elif tablename == "article":
        query = "INSERT INTO article (Reference, Libelle, N_serie, Date_entree,\
                            Etat, Garantie, Prix_Achat, Categorie, Marque,\
                            Taux_marque, Marge, Taux_marge, Proprietaire,\
                            RMA, Observation, EAN, Prix_Vente,\
                            N_commande)\
                SELECT ref, nom, N_Serie, STR_TO_DATE(Date_Entree,'%d/%m/%Y'),\
                       Etat, Garantie, Prix_Achat_TTC, Categorie, Marque,\
                       Taux_marque, Marge, Taux_marge, Proprietaire,\
                       RMA, Observations, EAN_Cdiscount, Prix_Vente_TTC,\
                       N_commande\
                FROM " + settings.article_table
        query_a = ""
        print(query)

    cursor.execute(query)
    cnx.commit()

    cnx.close()
