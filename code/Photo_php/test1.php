<!DOCTYPE html><html><head><title>test1</title><meta name="viewport" content="width=device-width, initial-scale=1"><link href="nextPg.css" type="text/css" rel="stylesheet"/></head><body><img src="background.jpg" class="cover" ><h1>test1</h1><div class="pictures"><?php $db = new PDO("mysql:dbname=try", "root", "");$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);$posts = $db->query("SELECT * FROM photos WHERE Location = 'test1'; ");foreach ($posts as $post) { ?><div class="picture"><a href="<?= $post["photo_path"]; ?>" class="downImg" download="downIng">Download</a><img src="<?= $post["photo_path"]; ?>" class="photoo"></div><?php } ?></div><div class = "backset"><a class = "backbutton" href="./blog_photo2.php">back to "Photos" page</a></div></body></html>