<form action="" method="GET">
    <?php $data = $this->session->data; ?>
    <table>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <?php for ($i=0; $i < count($data) ; $i++) { 
           ?>
        <tr>
            <td><?= $i + 1; ?></td>
            <td><input type="text" value="<?php echo $data[$i]['username'];?>" name="user"></td>
            <td><input type="text" value="<?= $data[$i]['password']?>" name="pas"></td>
            <!-- <td><input type="submit" value="EDIT"></td> -->
        </tr>
        <?php }?>
        <tr>
            <td>
        <a href="<?php echo base_url();?>welcome/logout">LOGOUT</a>
            </td>
        </tr>
    </table>
</form>
    
    </body>
</html>
