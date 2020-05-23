import sys
import import_file
import settings
import os


if __name__ == "__main__":

    try:
        liste_files = os.listdir(settings.Pathfile)
        # listdir renvoie  les noms de fichier sans leur chemin
        for file in liste_files:
            print(file)
            if 'commande' in file:
                # import_file.import_data_to_temp(settings.Pathfile+'/'+file,
                                                # settings.commande_table,
                                                # settings.commande_columns)
                # import_file.temp2prod("commande")
                import_file.temp2prod("operation")
            # elif 'vente' in file:
            #     import_file.import_data_to_temp(settings.Pathfile+'/'+file,
            #                                     settings.vente_table,
            #                                     settings.vente_columns)
            #     import_file.temp2prod("")
            # elif 'inventaire' in file:
            #     import_file.import_data_to_temp(settings.Pathfile+'/'+file,
            #                                     settings.article_table,
            #                                     settings.article_columns)
            #     input("wait ..")
            #     import_file.temp2prod("article")

    except Exception as e:
        print(str(e))
