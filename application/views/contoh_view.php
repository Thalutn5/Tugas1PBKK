<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Name | Resume</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Caveat|Open+Sans:400,700" rel="stylesheet">
    <style>
      
        html {
        box-sizing: border-box;
        }
        *, *:before, *:after {
        box-sizing: inherit;
        }

        body{
            font-family: fantasy;
            margin: 0;
            font-size: 20px;
        }

        h1, h2 {
            font-family: Helvetica, Arial, sans-serif;
            font-weight: 400;
        }

        h1 {
            font-size: 60px;
        }

        h2 {
            font-size: 40px;
            margin-top: 0;
        }

        a {
            color: #ef233c;
        }

        a:hover {
            text-decoration: none;
        }

        .content-wrap {
            max-width: 950px;
            margin: 0 auto;
            padding: 50px;
            overflow: auto;
        }

        .col-narrow {
            width: 30%;
            float: left;
            min-height: 175px;
        }

        .col-wide {
            width: 70%;
            float: left;
            padding-left: 20px;
            min-height: 175px;
            color: black;
        }

        /*Header and Footer
        ------------------------*/

        header, footer {
            background-color: #3e7acf;
            color: #8d99ae;
            margin: 0 auto;
            width: 100%;
        }

        /*Header*/

        .profile-img {
            border-radius: 100%;
        }

        header h1, header h2 {
            color: #edf3f4;
            margin: 0;
        }

        /*Footer*/

        footer {
            text-align: center;
        }

        .contact-info a {
            padding: 10px;
            display: inline-block;
        }

        .hello {
            background-color: white;
        }
        .skills {
            background-color: #55b4b0;
        }

        .experiences {
            background-color: #faeed8;
        }

    </style>
</head>
<body>
    <!-- // Intro -->
    <header>
		<div class="content-wrap">
        <?php
            $image_properties = array(
            'src'   => 'images/Capture.jpg',
            'alt'   => 'Thalut portrait',
            'class' => 'col-narrow profile-img',
            'width' => '200',
            'height'=> '400',
            'rel'   => 'lightbox',
         );
    
          echo img($image_properties);
        ?>
			<div class="col-wide">
				<h1> M Thalut Nadhil Q</h1>
                <h2>Student at Institut Teknologi Sepuluh Nopember Surabaya</h2>
                
                <ul style="list-style-type:none;">
                    <li>Contact</li>
                    <hr>
                    <li>0811-912-6767</li>
                    <br>
                    <li>thalut.nadhil@gmail.com</li>
                    <br>
                    <li>github.com/Thalutn5</li>
                    <br>
                    <li>Keputih Tegal Timur 116</li>
                    <br>
                </ul>
                <a href="https://www.linkedin.com/in/m-thalut-nadhil-q-403857136/" target="_blank"><img src="https://cdn2.iconfinder.com/data/icons/popular-social-media-flat/48/Popular_Social_Media-22-512.png" height="50" width="50"></a>
                <a href="https://github.com/Thalutn5/" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/popular-services-brands/512/github-512.png" height="50" width="50"></a>
            </div>
		</div>
    </header>
    
    <main> 
        <section class="hello">
            <div class="content-wrap">
                <h2>Hello</h2>
                <p>Hiiii, My name is M Thalut Nadhil Q. You can call me Thalut, I'm Student at Institut Teknologi Sepuluh Nopember Surabaya in major of Informatics. I also interested in Data-Science. </p>
            </div>
        </section>

        <section class="skills">
			<div class="content-wrap">
            <h2>Skills</h2>

            <div class="col-narrow">
                <p>Tools & Technologies<p>
                <hr>
                <ul>
                    <li>Microsoft Office</li>
                    <br>
                    <li>C/C++</li>
                    <br>
                    <li>HTML</li>
                    <br>
                    <li>CSS</li>
                    <br>
                    <li>PHP</li>
                    <br>
                    <li>Python</li>
                    <br>
                </ul>
			</div>
				
			<div class="col-narrow">
                <p>Interpersonal Skills<p>
                    <hr>
                    <ul>
                        <li>Leadership</li>
                        <br>
                        <li>Management</li>
                        <br>
                        <li>Communcation</li>
                        <br>
                        <li>Teamwork</li>
                    
                    </ul>			
            </div>
		
        </section>

        <!-- // Education -->
        <section class="experiences">
			<div class="content-wrap">
                <h2>Experiences</h2>

                <h3>Himpunan Mahasiswa Teknik Computer-Informatika ITS</h3>
                    <ul>
                        <li>Senior Staff of Internal Affairs (2019-Now)</li>
                        <li>Staff of Internal Affairs (2018-2019)</li>
                    </ul>
                <h3>Schematics ITS</h3>
                    <ul>
                        <li>Senior Staff of National Logic Competition(2019)</li>
                        <li>Staff of National Logic Competition (2018)</li>
                    </ul>
			</div>
        </section>
              
    </main>
    
    <footer>
		<div class="content-wrap">
            <h2>See you</h2>
        </div>
    </footer>
</body>
</html>