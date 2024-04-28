<!DOCTYPE html>
<html>
<head>
    <title>biodata</title>
</head>
<body>
<table border="0" bordercolor="">
        <tr>
            <td>
                <center>
                    <h2>Form Input Biodata</h2>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <form name="fm-input" method="POST">
                    <table>
                        <tr>
                            <td><label for="nama">Nama Lengkap</label></td>
                            <td>:</td>
                            <td><input type="text" size="20" name="name" id="nama" /></td>
                        </tr>
                        
                        <tr>
                            <td><label for="jkl">Jenis Kelamin</label></td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="jekel" value="Laki-Laki" id="laki" />
                                <label for="laki">LakiLaki</label>
                                <input type="radio" name="jekel" value="Perempuan" id="perempuan" />
                                <label for="perempuan">Perempuan</label>
                            </td>
                        </tr>

                        <tr>
                            <td><label for="hoby" >Hoby</label></td>
                            <td>:</td>
                            <td>
                                <input type="checkbox" name="hobby" id="bacabuku" value="Baca Buku" />
                                <label for="bacabuku">Baca Buku</label><br>
                                <input type="checkbox" name="hobby" id="olahraga" value="Olah Raga" />
                                <label for="olahraga">Olah Raga</label><br>
                                <input type="checkbox" name="hobby" id="maingame" value="Main Game" />
                                <label for="maingame">Main Game</label><br>
                                <input type="checkbox" name="hobby" id="hiking" value="hiking" />
                                <label for="hiking">Hiking</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="telp">Pendidikan</label></td>
                            <td>:</td>
                            <td>
                            <label for="education"></label>
                                <select id="cpendidikan" name="pendidikan">
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="KULIAH">Kuliah</option>
                                    <option value="none">tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="alamat">Alamat</label></td>
                            <td>:</td>
                            <td><textarea name="alamat" id="alamat" cols="40" rows="3"></textarea></td>
                        </tr>
                       
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Submit" />
                                <input type="reset" name="reset" value="Clear!" />
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
    <?php
if (isset($_POST['submit'])){
    $namalkp = $_POST['name'];
    $jeniskel = $_POST['jekel'];
    $hobbi =  $_POST['hobby'];
    $education = $_POST['pendidikan'];
    $almt = $_POST['alamat'];
}

echo "
<table>
    <tr>
        <td>
            <center>
                <h2>Biodata Anda</h2>
            </center>
        </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>$namalkp</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>$jeniskel</td>
    </tr>
    <tr>
        <td>Hobby</td>
        <td>:</td>
        <td>$hobbi</td>
    </tr>
    <tr>
        <td>Pendidikan</td>
        <td>:</td>
        <td>$education</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>$almt</td>
    </tr>
</table>";
?>
</body>
</html>

