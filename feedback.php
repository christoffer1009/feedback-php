<?php include 'inc/header.php'?> 
<?php 
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?> 



  <h2>Feedback</h2>
    <?php if(empty($feedback)): ?>
      <p>There is no feedback</p>
    <?php endif; ?>

    <?php foreach ($feedback as $item) : ?>
    <div class="card my-3 mx-3 col-8">
      <div class="card-body">
        <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis! -->
        <?php echo $item['text'] ?>
        <div class="text-secondary mt-2">
          by <?php echo $item['name']; ?> on <?php echo $item['date']; ?>
        </div>      
      </div>
    </div>
    <?php endforeach; ?>


<?php include 'inc/footer.php'?> 
