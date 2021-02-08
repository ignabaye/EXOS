<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Exo6</title>
    </head>
    <body>
        <form action = "Exo6a.html" method = "POST"> 
            <table>
                <tr>
                    <td><label>Matricule</label></td>
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
                            <option value ="isnformatique"> Informatique </option>
                            <option value ="restauration"> Restauration </option>
                            <option value ="accademique"> Accademique </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for ="fonction">Fonction : </label></td>
                    <td>
                        <select id ="fonction" name ="mafonction">
                            <option value ="choisir"> choisir</option>
                            <option value ="Directeur"> Directeur </option>
                            <option value ="Gestionnaire"> Gestionnaire </option>
                            <option value ="Informaticien"> Informaticien </option>
                            <option value ="Cuisinier"> Cuisinier </option>
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