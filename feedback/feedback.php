<?php include 'inc/header.php' ?>  

<?php
  // $feedback=[
  //   [
  //     'id'=>'2',
  //     'name'=>'Beth Williams',
  //     'email'=>'beth@gmail.com',
  //     'body'=> 'It is ok'
  //   ],
  //   [
  //     'id'=>'3',
  //     'name'=>'Walt Williams',
  //     'email'=>'walt@gmail.com',
  //     'body'=> 'Good job!'
  //   ],
  //   [
  //     'id'=>'4',
  //     'name'=>'Bill Johnson',
  //     'email'=>'bill@gmail.com',
  //     'body'=> 'It is working'
  //   ],
  // ];
    $sql='SELECT * FROM feedback';
    $result=mysqli_query($conn,$sql);
    $feedback=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>

    <h2>Past Feedback</h2>

    <?php if(empty($feedback)): ?>
      <p class="lead mt3">There is no feedback</p>
    <?php endif; ?>

    <?php foreach($feedback as $item):?>
      <div class="card my-3 w-75">
        <div class="card-body text-center">
        <?php echo $item['body'];?>
        <div class="text-secondaty mt-2">
          By <?php echo $item['name']; ?> on <?php echo $item['date'];?>
        </div>
        </div>
      </div>
   <?php endforeach; ?>

<?php include 'inc/footer.php' ?>

