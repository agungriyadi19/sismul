<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Multimedia</title>
    <link rel="icon" href="<?php echo base_url('assets/img/pangsit-goreng.jpeg')?>">
    <style>
    div {
        margin: 10px;
        padding: 10px;
        border: 1px black solid;
        border-radius: 10px;
    }

    nav {
        background-color: #f0f0f0;
        padding: 10px 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        font-family: sans-serif;
    }

    nav a {
        color: #333;
        text-decoration: none;
        margin: 0 10px;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    nav a:hover {
        color: #007BFF;
    }

    marquee {
        background-color: #dff0ff;
        color: #007BFF;
        font-weight: bold;
        font-size: 20px;
        padding: 10px 0;
        border-radius: 8px;
        margin: 10px;
        font-family: 'Segoe UI', sans-serif;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }


    #judul {
        background: #ffe4e1;
        font-family: 'Arial', sans-serif;
    }

    #paragraf {
        background: #e6f7ff;
        font-family: 'Georgia', serif;
        line-height: 1.6;
    }

    #list {
        background: #f0fff0;
        font-family: 'Courier New', monospace;
    }

    #section {
        background: #fff8dc;
        font-family: 'Tahoma', sans-serif;
    }

    .menu {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
        padding: 20px;
    }

    .menu-card {
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .menu-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .responsive-img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .responsive-title {
        font-size: 1.5rem;
        margin-top: 15px;
        color: #333;
    }

    .responsive-paragraph {
        font-size: 1rem;
        color: #666;
        margin-top: 10px;
        padding: 0 10px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .responsive-iframe {
        aspect-ratio: 16 / 9;
        width: 100%;
        border: none;
    }
    </style>
</head>

<body>
    <marquee behavior="scroll" direction="left">
        Sistem Multimedia 🚶‍♂️
    </marquee>
    <nav>
        <a href="#judul">Judul</a> |
        <a href="#paragraf">Paragraf</a> |
        <a href="#list">List</a> |
        <a href="#section">Section</a> |
    </nav>
    <div id="judul">
        <iframe src="<?php echo base_url('assets/video/pantai.mp4')?>" autoplay="autoplay" frameborder="0"
            class="responsive-iframe"></iframe>
    </div>

    <div id="judul">
        <h1>Ini adalah judul</h1>
        <h2>Ini adalah judul</h2>
        <h3>Ini adalah judul</h3>
        <h5>Ini adalah judul</h5>
        <h6>Ini adalah judul</h6>
    </div>
    <div id="paragraf">
        <p>Ini adalah paragraf</p>
        <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto hic
            incidunt
            obcaecati totam tenetur culpa modi commodi tempore, magni aliquam beatae dolor numquam quod molestiae
            accusamus
            asperiores excepturi nobis nemo.</p>
        <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto hic
            incidunt
            obcaecati totam tenetur culpa modi commodi tempore, magni aliquam beatae dolor numquam quod molestiae
            accusamus
            asperiores excepturi nobis nemo.</p>
        <br>
    </div>
    <div id="list">
        <ul type="circle">
            <li>Coffee</li>
            <li>Tea</li>
            <li>Milk</li>
        </ul>

        <ol type="A">
            <li>Coffee</li>
            <li>Tea</li>
            <li>Milk</li>
        </ol>
    </div>
    <div id="section">
        <section>
            <article>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, officia laboriosam ex ipsam
                facilis
                et animi, assumenda dicta repellat veniam pariatur voluptatem unde quis corporis a laborum tempore
                velit
                impedit.</article>
            <article>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, officia laboriosam ex ipsam
                facilis
                et animi, assumenda dicta repellat veniam pariatur voluptatem unde quis corporis a laborum tempore
                velit
                impedit.</article>
            <article>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, officia laboriosam ex ipsam
                facilis
                et animi, assumenda dicta repellat veniam pariatur voluptatem unde quis corporis a laborum tempore
                velit
                impedit.</article>
            <article>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, officia laboriosam ex ipsam
                facilis
                et animi, assumenda dicta repellat veniam pariatur voluptatem unde quis corporis a laborum tempore
                velit
                impedit.</article>
        </section>
    </div>
    <div class="menu">
        <div class="menu-card">
            <img src="<?php echo base_url('assets/img/pangsit-goreng.jpeg')?>" alt="Pangsit Goreng"
                class="responsive-img">
            <h1 class="responsive-title">Pangsit Goreng</h1>
            <p class="responsive-paragraph">Pangsit goreng merupakan makanan yang lezat, cocok untuk camilan atau
                makanan
                utama.</p>
        </div>

        <div class="menu-card">
            <img src="<?php echo base_url('assets/img/pangsit-goreng.jpeg')?>" alt="Pangsit Goreng"
                class="responsive-img">
            <h1 class="responsive-title">Pangsit Goreng</h1>
            <p class="responsive-paragraph">Pangsit goreng merupakan makanan yang lezat, cocok untuk camilan atau
                makanan
                utama.</p>
        </div>

        <div class="menu-card">
            <img src="<?php echo base_url('assets/img/pangsit-goreng.jpeg')?>" alt="Pangsit Goreng"
                class="responsive-img">
            <h1 class="responsive-title">Pangsit Goreng</h1>
            <p class="responsive-paragraph">Pangsit goreng merupakan makanan yang lezat, cocok untuk camilan atau
                makanan
                utama.</p>
        </div>

        <div class="menu-card">
            <img src="<?php echo base_url('assets/img/pangsit-goreng.jpeg')?>" alt="Pangsit Goreng"
                class="responsive-img">
            <h1 class="responsive-title">Pangsit Goreng</h1>
            <p class="responsive-paragraph">Pangsit goreng merupakan makanan yang lezat, cocok untuk camilan atau
                makanan
                utama.</p>
        </div>
    </div>
    <audio src="<?php echo base_url('assets/audio/audio.mp3')?>" hidden autoplay></audio>

</body>

</html>