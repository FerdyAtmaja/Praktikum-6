<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="POST" action="postAct3.php">
            <table width="400" align="center" cellpadding="2" cellspacing="2">
                <tr>
                    <td width="130">Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td width="130">Email</td>
                    <td><input type="text" name="email" ></td>
                </tr>
                <tr>
                    <td width="130">Alamat</td>
                    <td><textarea cols="20" rows="3" name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td width="130">Hobi</td>
                    <td><input type="radio" name="jenisKelamin" value="Pria" >Pria
                    <input type="radio" name="jenisKelamin" value="Wanita" >Wanita</td>
                </tr>
                <tr>
                    <td width="130">Hobi</td>
                    <td><input type="text" name="hobi" ></td>
                </tr>
                <tr>
                    <td width="130">Tanggal Lahir</td>
                    <td><input type="date" name="tanggalLahir" ></td>
                </tr>
                <tr>
                    <td>
                    <input type="submit" name="btnLogin" value="Login"><input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>