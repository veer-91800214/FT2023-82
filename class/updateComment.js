$(document).ready(function () {
  $(".comment-send-icon").click(function () {
    $userId = $(this)
      .parent()
      .parent()
      .parent()
      .parent()
      .parent()
      .attr("id")
      .split("-")[0];
    $postId = $(this)
      .parent()
      .parent()
      .parent()
      .parent()
      .attr("id")
      .split("-")[1];
    $comment = $(this).parent().parent().children(".comment-input").val();
    $.post(
      "../Model/updateComment.php?update=TRUE&ui=" + $userId + "&pi=" + $postId,
      { content: $comment },
      function () {
        $(".comments-div")
          .children(".comments")
          .load("../Model/updateComment.php?pi=" + $postId + "&ui=" + $userId);
      }
    );
  });

  $(".comment-option-icon").click(function () {
    $postOption = $(this).parent().children(".comment-edit-option");
    $postOption.slideToggle();
  });
});