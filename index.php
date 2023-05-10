<?php
session_start();
if($_SESSION['USERS']!="User1"){
    header("location:login.php");
    exit();
}

?>
<h1>titre</h1>
<h2>mbôla titre</h2>
<h3>de mbôla titre</h3>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim ea tenetur quo aliquid quaerat, nihil neque ad animi unde doloribus velit quae deleniti consequatur rem officia iste accusantium culpa, ab earum, dolores at! Voluptas maiores deserunt vitae quia amet in, at temporibus vel ut facilis quos itaque quidem aut accusamus nesciunt, aliquid ab illo alias modi porro quo ducimus voluptatem quisquam reiciendis. Optio quisquam, quia numquam consectetur amet inventore rerum nulla possimus esse vel similique vitae. Voluptatem qui ipsum quibusdam excepturi vero, quaerat corrupti molestiae sequi aperiam, optio exercitationem, quos deleniti autem rerum id soluta. Ratione culpa molestiae asperiores placeat eveniet possimus voluptas velit, quas veniam nemo neque, ab minima? Mollitia, recusandae deserunt esse ex praesentium soluta pariatur voluptate, odit quasi quae laboriosam delectus repellat aut nulla ipsam molestiae inventore incidunt maiores dolorem itaque eius commodi exercitationem. Magnam quidem in non a exercitationem ipsam recusandae eius maiores consequatur deleniti obcaecati nihil architecto odit dolorum distinctio quod magni, voluptates illo ratione repellat laboriosam vel itaque facilis! Dolor officiis dolores ea ad temporibus dolorem facere eaque, atque qui aspernatur esse cumque neque repellat sequi animi id ipsam earum voluptate. Repellendus, tenetur? Mollitia quo numquam fugit ratione aut obcaecati amet fugiat accusantium culpa.</p>
<a href="logout.php">Déconnexion</a>