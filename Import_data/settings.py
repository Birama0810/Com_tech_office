# Declaration des constantes

Pathfile = "source"
Database = 'com_tech_office_app'
Server = "localhost"

User = "root"
Password = "h38sXg5AU6uK"


vente_table = "temp_suivie_vente"
vente_columns = [
    "Reference_commande",
    "Date",
    "Date_de_confirmation_de_expedition",
    "Statut_commande",
    "Type_Operation",
    "Detail_Produit",
    "Montant_Produits",
    "Montant_frais_de_traitement",
    "Montant_frais_de_livraison",
    "Montant_total",
    "Commissions",
    "Vos_gains",
    "Statut_paiement",
    "Date_paiement",
    "Date_de_facture",
    "N_facture",
    "total_sans_frais_traitement",
    "commission_sans_frais_traitement",
    "Comminission_reelle",
    "PRIX_IMTECH_pour_TKL",
    "Livraison",
    "Livraison_facturee_par_MDS",
    "Marge_Tkl",
    "Reglement_CDISCOUNT",
    "Facture_par_MDS_Tkl",
    "Observations"
    ]

commande_table = "temp_commande"
commande_columns = [
    "Commande",
    "date_expedition_generation_remboursement",
    "vente_remboursement",
    "Detail_Produit",
    "Montant_Vente_produits_dont_frais_de_port_et_interet",
    "Commission",
    "Total_paiement",
    "Date_echeance",
    "COMMENTAIRES"
    ]

article_table = "temp_article"
article_columns = [
    "Categorie",
    "Ref",
    "Marque",
    "Nom",
    "N_serie",
    "Etat",
    "Quantite",
    "Proprietaire",
    "Garantie",
    "Date_Entree",
    "Prix_Achat_HT",
    "Prix_Achat_TTC",
    "Taux_marque",
    "Taux_marge",
    "Prix_Vente_HT",
    "Prix_Vente_TTC",
    "Marge",
    "Frais_de_livraison",
    "Taux_Commission_Cdiscount_TTC",
    "Prix_Cdiscount",
    "Facteur_prix_Feedbiz_Cdiscount",
    "Prix_Feedbiz_Cdiscount",
    "Prix_Cdiscount_minimum",
    "Taux_Commission_Amazon_TTC",
    "Adaptation_frais_envoi_Amazon",
    "Prix_Amazon",
    "Prix_Amazon_minimum",
    "Date_Sortie",
    "Marketplace",
    "N_Commande",
    "TRANSPORTEUR",
    "Frais_Livraison",
    "Reglement_Marketplace",
    "Facture_Fournisseur",
    "RMA",
    "Observations",
    "SKU_Amazon",
    "SKU_Cdiscount",
    "EAN_Cdiscount",
    "ASIN_Amazon"
    ]
