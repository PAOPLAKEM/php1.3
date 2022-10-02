<html>
    
    <body>
        
    <?php
           $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           $stmt = $pdo->prepare("SELECT * FROM member");
           $stmt->execute();?>
          
            <?php while ($row = $stmt->fetch()) : ?>
                <div style="padding: 15px;">
               
                <?php echo "ชื่อสมาชิก : " . $row ["name"] . "<br>";   
                  echo "ที่อยู่: " . $row ["address"] . "<br>";
                  echo "อีเมล์: " . $row ["email"] . " <br>";?>
                  <img src="../img/<?=$row["username"]?>.jpg" width='100'><br>
                  <?php echo "<hr>\n";?>
                   
                </div>
                <?php endwhile; ?>
           
    </body>
</html>