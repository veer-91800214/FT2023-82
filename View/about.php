<?php
if (!isset($_SESSION))
    session_start();


if (isset($_SESSION['loggedIn'])) {
    echo '<h1>About</h1>
<p style="height: 100%;">Post.It facilitates the sharing of ideas and information through virtual networks. From
    Facebook and Instagram to Twitter and YouTube, social media covers a broad universe of apps and platforms that allow
    users to share content, interact online, and build communities. More than 4.7 billion people use social media, equal
    to roughly 60% of the world’s population.1
    <br>
    <br>

    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, assumenda, quia harum omnis odit sed ex nesciunt in
    explicabo, nobis veniam officiis accusantium. Sequi quasi asperiores provident consequatur tempore dolorum eveniet
    soluta officia dolore perferendis. Reprehenderit odio libero dolores itaque sit aperiam, praesentium eum, velit
    repellat minima facere cumque, in ex repudiandae explicabo id ipsam fugit magni a quo totam? Vel delectus adipisci
    quis saepe ducimus fugiat omnis dolore totam voluptatibus minus, cum quae pariatur libero velit ratione hic aliquam
    non! Odio voluptas nemo officiis quibusdam. Quam atque, explicabo quasi velit quod omnis ab minima ex facere cum,
    nisi qui.
    <br>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est veritatis aperiam alias laborum asperiores aspernatur
    enim quas a? Illo aperiam est maxime quas cum ut sequi nesciunt officiis. Deserunt consequatur fugiat rem error
    porro labore consequuntur ullam excepturi odit, itaque non laboriosam! Ducimus neque iure est voluptate ullam
    delectus tempore.


</p>';
}
else {
    echo "<br><h1 class='bg-danger'>user not logged in</h1>";
}

?>