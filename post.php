<?php
include_once("templates/header.php");

/* No index.php o href do link é <a href="<?= $BASE_URL ?>post.php?id=<?php echo $post['id']; ?>"> */


if (isset($_GET['id'])) {
  $postId = $_GET['id']; // Aqui, o id passado pela query acima será atribuído
  $currentPost;

  foreach ($posts as $post) {
    // Faz um loop nos posts e atribui o post atual à variável $currentPost
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}

?>

<!-- Exibe o post -->
<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?php echo $currentPost['title'] ?></h1>
    <p id="post-description"><?php echo $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?php echo $BASE_URL; ?>/img/<?php echo $currentPost['img']; ?>" alt="<?php echo $currentPost['title']; ?>">
    </div>
    <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ullam, velit, voluptates recusandae exercitationem ad ipsum libero minus, expedita debitis nostrum quisquam quia distinctio ea voluptas hic praesentium adipisci omnis.
      Atque recusandae praesentium delectus sunt nihil maiores error optio nostrum natus commodi aliquid amet, dolores quis quasi, temporibus doloremque, odio sint reprehenderit! Corrupti eaque voluptatum ea ipsum dolores recusandae doloremque!
      Quisquam temporibus sunt at voluptate voluptatem ipsa! Labore minus a maiores! Optio, cum dicta. Ipsa, fuga. Odit, quidem. Soluta illo, officia ab unde magni harum neque? Nesciunt officiis porro nisi.
      Nemo, fugit. Totam sunt debitis, praesentium animi atque dolor asperiores tempora molestiae, reprehenderit rerum, nesciunt iste aspernatur iusto. Quas repellat temporibus quae facere libero in dignissimos itaque vel maiores autem?
      Maxime molestiae magni ea. Quod suscipit repellat vitae accusamus, animi sit aliquid ullam quisquam. Facilis maiores, repudiandae nobis dolorum sequi, adipisci blanditiis omnis tempora quam fugiat voluptas, illum atque earum!
    </p>
    <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ullam, velit, voluptates recusandae exercitationem ad ipsum libero minus, expedita debitis nostrum quisquam quia distinctio ea voluptas hic praesentium adipisci omnis.
      Atque recusandae praesentium delectus sunt nihil maiores error optio nostrum natus commodi aliquid amet, dolores quis quasi, temporibus doloremque, odio sint reprehenderit! Corrupti eaque voluptatum ea ipsum dolores recusandae doloremque!
      Quisquam temporibus sunt at voluptate voluptatem ipsa! Labore minus a maiores! Optio, cum dicta. Ipsa, fuga. Odit, quidem. Soluta illo, officia ab unde magni harum neque? Nesciunt officiis porro nisi.
      Nemo, fugit. Totam sunt debitis, praesentium animi atque dolor asperiores tempora molestiae, reprehenderit rerum, nesciunt iste aspernatur iusto. Quas repellat temporibus quae facere libero in dignissimos itaque vel maiores autem?
      Maxime molestiae magni ea. Quod suscipit repellat vitae accusamus, animi sit aliquid ullam quisquam. Facilis maiores, repudiandae nobis dolorum sequi, adipisci blanditiis omnis tempora quam fugiat voluptas, illum atque earum!
    </p>
  </div>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach ($currentPost['tags'] as $tag) : ?>
        <li><a href="#"><?php echo $tag; ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach ($categories as $category) : ?>
        <li><a href="#"><?php echo $category; ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>



<?php
include_once("templates/footer.php");
?>