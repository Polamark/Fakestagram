<?php
$author1 = [
    'name' => 'Parrot Lovers',
    'pfp' => 'https://placehold.co/100x100',
    'verified' => true
];
$authors = [
  $author1
];
$post1 = [
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae maximus nunc, nec ornare justo. Aliquam posuere tristique augue id venenatis. Cras lobortis malesuada nibh eu rutrum. Pellentesque id posuere velit. Pellentesque eu consequat felis, eu rhoncus sapien. Etiam quis nisl turpis. Phasellus scelerisque odio massa, id pretium neque lacinia at. Suspendisse turpis ipsum, rhoncus quis porttitor vel, scelerisque non risus. Integer vel dolor ac mi aliquam volutpat ut et nunc. Proin dictum tortor leo, sed pellentesque risus vulputate interdum. Etiam efficitur risus et finibus rhoncus. Mauris ac lobortis nibh. Donec rutrum lectus pretium faucibus faucibus. In imperdiet sagittis nibh, quis aliquet eros egestas ac. Suspendisse potenti. Ut libero nisi, pellentesque a arcu et, accumsan posuere ex. In eget sapien quis mauris vestibulum dictum. Pellentesque in tincidunt massa, non venenatis elit. Donec lobortis ac magna aliquam sollicitudin. Donec dignissim id nisi sit amet rhoncus. Sed tristique arcu felis, non tempor nunc placerat dictum. Vestibulum facilisis orci rutrum nisl sollicitudin posuere. Morbi viverra faucibus est, ut commodo risus eleifend ut. Aliquam orci mi, pharetra id mi ut, porta egestas sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse pulvinar ipsum id orci varius, in posuere eros fringilla. Praesent arcu mauris, sollicitudin eu condimentum eu, elementum scelerisque orci. Integer ac urna orci. Integer condimentum malesuada felis a gravida. Nulla ultricies cursus sem, vitae tincidunt eros. Nulla arcu lacus, efficitur sed accumsan a, ultrices sit amet quam. Sed ut nulla vitae mi hendrerit blandit. In sollicitudin nisl sed ultrices pretium. Sed vestibulum tristique sem eu dignissim. Phasellus molestie nisi quis sagittis semper. Nulla commodo a est eget dignissim. Praesent augue nisl, ornare vel faucibus in, sollicitudin non nisi. Morbi consectetur magna nec leo commodo tempor. Praesent nec rutrum enim, sit amet tincidunt lacus. Sed pulvinar commodo molestie. Integer mollis felis at tortor feugiat porttitor fringilla gravida ante. Nullam porta congue erat ut tincidunt. Nam posuere lacus faucibus mattis tempor. Praesent condimentum pharetra risus. Praesent tristique tincidunt odio a iaculis. Suspendisse mattis varius ipsum eu sodales. Integer ut felis eget urna hendrerit feugiat et eu turpis. Morbi imperdiet hendrerit neque in elementum. Nullam sem orci, luctus vitae libero sit amet, ultricies consequat sem. Vestibulum eu facilisis tortor. Vestibulum sit amet lacinia orci, commodo accumsan nisi. In ut cursus mi.',
    'tags' => ['php', 'javascript'],
    'author' => $authors[0],
    'location' => 'Somewhere in the world',
    'postImg' => "post-photos/parrot.png",
    'likes' => "100",
    'comments' => [
        ['author' => 'John', 'content' => 'Great post!'],
        ['author' => 'Jane', 'content' => 'I love it!']
    ]
];
$posts = [$post1, $post1]
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
                    <div class="flex flex-col items-start justify-start">
                        <span class="text-xl flex justify-center items-center font-medium"><?php echo $post['author']['name']; if ($post['author']['verified']) {echo '<i class="w-5 ml-1 mt-1 aspect-square text-lg text-blue-500 bi bi-patch-check-fill"></i>';};?> </span>
                        <span class="text-sm -mt-1.5 text-gray-500"><?= $post['location']?></span>
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
            </article>
        <?php endforeach ?>
    </section>
</body>
</html>