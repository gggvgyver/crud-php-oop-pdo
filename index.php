<?php 
  include "./includes/class-autoload.inc.php";
  require_once("./templates/header.php");

  // echo $_SERVER["DOCUMENT_ROOT"];
  // error_reporting( E_ALL );
  // ini_set( 'display_errors', 1 );
?>
<div class="text-center">
  <button class="my-5 btn btn-primary" data-toggle="modal" data-target="#addPostModal">새글작성</button>
</div>

<!-- Modal -->
<div class="modal fade" id="addPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">새글작성</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- form input -->
        <form method="POST" action="post.process.php">
          <div class="form-group">
            <label>제목: </label>
            <input class="form-control" name="post-title" type="text" required>
          </div>
          <div class="form-group">
            <label>내용: </label>
            <textarea class="form-control"  name="post-content" required></textarea>
          </div>
          <div class="form-group">
            <label>작성자: </label>
            <input class="form-control" name="post-author" type="text" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
            <button type="submit" name="submit" class="btn btn-primary">글쓰기</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- <div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Post One</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, molestias distinctio? Maxime non deserunt praesentium nihil ipsum, eaque adipisci a accusamus ut officia iure nisi sit, quod voluptas officiis modi.</p>
        <h6 class="card-subtitle text-muted text-right">Author: Candra</h6>
        <button class="btn btn-warning">Edit</button>
        <button class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
  <div class="col-md-6">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Post Two</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, molestias distinctio? Maxime non deserunt praesentium nihil ipsum, eaque adipisci a accusamus ut officia iure nisi sit, quod voluptas officiis modi.</p>
      <h6 class="card-subtitle text-muted text-right">Author: John DOe</h6>
      <button class="btn btn-warning">Edit</button>
      <button class="btn btn-danger">Delete</button>
    </div>
  </div>
</div> -->

<div class="row">
  <?php 
    $posts = new Posts();
    if($posts->getPost()) {
      foreach($posts->getPost() as $post) {
        echo '<div class="col-md-6 mt-4">';
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo "<h5 class='card-title'>" . $post['title'] . "</h5>";
        echo "<p class='card-text'>" . $post['body'] . "</p>";
        echo "<h6 class='card-subtitle text-muted text-right'>작성자: " . $post['author'] . "</h6><br />";
        echo "<h6 class='card-subtitle text-muted text-right'>작성일: " . $post['date_created'] . "</h6>";
        echo "<a  href='editForm.php?id=" . $post['id'] . "' class='btn btn-warning'>편집</a> ";
        echo "<a href='post.process.php?send=del&id=" . $post['id'] . "' class='btn btn-danger'>삭제</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
      }
    }  else {
      echo "<p class='mt-5 mx-auto'>글을 입력해주세요!</p>";
    }
  ?>
</div>

<?php 
  require_once("./templates/footer.php");
?>