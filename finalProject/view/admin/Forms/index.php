<?php
$files = scandir("files");
?>
<fieldset>
<legend>File Download</legend>
<?php
for ($a = 2; $a < count($files); $a++)
{
    ?>
        <?php echo $files[$a]; ?>
        
        <table border="1px solid gray">
            <tr>
                <td><a href="files/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">Download</a> 
                </td>
            </tr>
        </table>
        
    <?php
}
?>
</fieldset>
<td><a href="../../../action/teacher/teacherHome.php"><b>Home</b></a></td>