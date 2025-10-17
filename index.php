<?php
$author1 = [
    'name' => 'Parrot Lovers',
    'pfp' => 'https://as2.ftcdn.net/v2/jpg/01/09/39/73/1000_F_109397389_huBYRiES0sAHsYBHuo7XU9aRvD0I73if.jpg',
    'verified' => false
];
$author2 = [
    'name' => 'Wiener House',
    'pfp' => 'https://images.ctfassets.net/qj2yxv39d6ig/6B3Ou63rVBu0N4Tr9MsM1b/25b8847b0febc4fb466948b13fb79940/Dachshund_1000.jpg',
    'verified' => true
];
$authors = [
    $author1,
    $author2,
];
$post1 = [
    'content' => 'A nice photo of this great parrot I took',
    'tags' => ['php', 'javascript'],
    'author' => $authors[0],
    'location' => 'Amazon',
    'postImg' => "https://img.freepik.com/free-photo/closeup-scarlet-macaw-from-side-view-scarlet-macaw-closeup-head_488145-3540.jpg?semt=ais_hybrid&w=740&q=80",
    'likes' => "13,847",
    'comments' => [
        ['author' => 'John', 'content' => 'Great post!'],
        ['author' => 'Jane', 'content' => 'I love it!']
    ]
];
$post2 = [
    'content' => 'Long dog',
    'tags' => ['php', 'javascript'],
    'author' => $authors[1],
    'location' => '',
    'postImg' => "https://www.thekennelclub.org.uk/media/2145/dachshund-smooth-haired-standing.jpg?rmode=pad&width=1000&v=1d5750bdf673270",
    'likes' => "858,391",
    'comments' => [
        ['author' => 'John', 'content' => 'Great post!'],
        ['author' => 'Jane', 'content' => 'I love it!']
    ]
];
$posts = [$post1, $post2]
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fakestagram</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
</head>
<body class="flex w-screen overflow-x-clip">
    <nav class="flex flex-col border-r-2 w-90 px-4 py-8 border-black/25 text-lg fixed h-screen top-0 left-0">
        <span class="font-semibold text-5xl">Fakestagram</span>
        <ul class="flex gap-4 flex-col mt-8">
            <li class="nav-item"><i class="bi bi-house-door-fill text-3xl"></i> Home</li>
            <li class="nav-item"><i class="bi bi-search text-3xl"></i> Search</li>
            <li class="nav-item"><i class="bi bi-compass text-3xl"></i> Explore</li>
            <li class="nav-item"><i class="bi bi-camera-reels text-3xl"></i> Reels</li>
            <li class="nav-item"><i class="bi bi-send text-3xl"></i> Messages</li>
            <li class="nav-item"><i class="bi bi-heart text-3xl"></i> Notifications</li>
            <li class="nav-item"><i class="bi bi-plus-square text-3xl"></i> Create</li>
            <li class="nav-item"><i class="bi bi-person-circle text-3xl"></i> Profile</li>
        </ul>
        <ul class="flex gap-4 flex-col mt-auto">
            <li class="nav-item"><i class="bi bi-list text-3xl"></i> More</li>
            <li class="nav-item"><i class="bi bi-boxes text-3xl"></i> Also from meta</li>
        </ul>
    </nav>
    <section class="flex flex-col justify-center items-center w-full flex-1 h-fit py-6 px-1 gap-15">
        <?php foreach ($posts as $post): ?>
            <article class="flex flex-col w-full max-w-150 h-fit">
                <div class="flex w-full items-center gap-3">
                    <img class="w-10 aspect-square rounded-full" src="<?= $post['author']['pfp'] ?>" alt="pfp">
                    <div class="flex flex-col items-start justify-start h-full">
                        <span class="text-xl flex justify-center items-center font-medium"><?php echo $post['author']['name']; if ($post['author']['verified']) {echo '<i class="w-5 ml-1 mt-0.5 aspect-square text-lg text-blue-500 bi bi-patch-check-fill"></i>';};?> </span>
                        <?php if ($post['location']){ echo '<span class="text-sm -mt-1.5 text-gray-500">'.$post['location'] . '</span>';};?>
                    </div>
                    <i class="ml-auto my-auto text-2xl cursor-pointer bi bi-three-dots"></i>
                </div>
                <img class="w-full mt-3 rounded-xs max-h-200 object-cover" src="<?= $post['postImg'] ?>" alt="post">
                <div class="flex justify-start items-center gap-3 text-3xl mt-4">
                    <i class="bi bi-heart"></i>
                    <i class="bi bi-chat"></i>
                    <i class="bi bi-send"></i>
                    <i class="bi bi-bookmark ml-auto"></i>
                </div>
                <span class="text-lg font-semibold mt-2"><?= $post['likes']?> likes</span>
                <p class="text-lg text-wrap line-clamp-3">
                    <span class="font-semibold"><?php echo $post['author']['name']; if ($post['author']['verified']) {echo '<i class="w-5 ml-1 mt-0.5 aspect-square text-sm text-blue-500 bi bi-patch-check-fill"></i>';};?> </span>
                    <?= $post['content'] ?>
                </p>
                <span class="text-gray-500 mt-2">View all <?php echo count($post['comments']) ?> comments</span>
                <span class="text-gray-500 mt-0.5">Add a comment</span>
            </article>
        <?php endforeach ?>
    </section>
</body>
</html>