<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>PAGE 5</title>
    </head>
    <body>
        <form action = " " method = "POST"> 
            <table border = "1">
                <tr>
                    <td><label>Matricule </td>
                    <td><input type="text" name="matricule"></td>
                </tr>
                <tr>
                    <td>Nom </td>
                    <td><input type="text" name="nom"></td>
                </tr>
                <tr>
                    <td>Prenom</td>
                    <td><input type="text" name="prenom"></td>
                
                </tr>
                <tr>
                    <td>sexe : </td>
                    <td>Masculin<input type="radio" name="genre" value ="M">Feminin<input type="radio" name="genre" value = "F"></td>
                </tr>
                <tr>
                    <td>Adresse</td>
                    <td><textarea name="adresse" rows ="1" cols ="20"></textarea></td>
                </tr>
                <tr>
                    <td><label for ="service">Service : </label></td>
                    <td>
                        <select id ="choisir" name ="service">
                            <option value ="choisir"> Choisir </option>
                            <option value ="comptabilité"> Comptabilité </option>
                            <option value ="informatique"> Informatique </option>
                            <option value ="informatique"> Restauration </option>
                            <option value ="accademique"> Accademique </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for ="fonction">Fonction : </label></td>
                    <td>
                        <select id ="fonction" name ="mafonction">
                            <option value ="choisir"> choisir</option>
                            <option value ="directeur"> Directeur </option>
                            <option value ="gestionnaire"> Gestionnaire </option>
                            <option value ="informaticien"> Informaticien </option>
                            <option value ="cuisinier"> Cuisinier </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit">Valider</button></td>
                    <td><button type="reset">Reinitialiser</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>