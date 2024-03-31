<?php
$title = "About us";
ob_start();
?>
<main>
      <div class="container center-align">
          <h2>Who are we?</h2>
          <h5>Founded in 1946, the Jardin des Animaux was the first privately-owned zoo to emerge in France.
            Nearly a century later, it continues to stand out and ranks among the top 5 zoological parks in France in terms of visitors.
            Through the quality of its facilities and the dedication of its teams, the park focuses all its
            attention and efforts on the well-being of the animals and the welcoming of visitors.</h5>
        <br>
        <img src="images/about.jpg" width="450" height="300">
      </div>
      <br>
      <div class="divider" style="border: 3px solid #388E3C"></div>
      <div class="container center-align">
          <h2>Jardin des Animaux it's...</h2>
        <div class="row">
          <div class="col s12">
            <div class="col s3">
              <div class="card-panel green darken-2">
                <span class="white-text"><i class="fa-solid fa-horse fa-3x"></i><br><h5>1,500</h5>animals from 160 species.</span>
              </div>
            </div>
            <div class="col s3">
              <div class="card-panel green darken-2">
                <span class="white-text"><i class="fas fa-tree fa-3x"></i><h5>18</h5> hectares of wooded<br>area</span>
              </div>
            </div>
            <div class="col s3">
              <div class="card-panel green darken-2">
                <span class="white-text"><i class="fas fa-hippo fa-3x"></i><h5>55</h5>conservation<br>programs</span>
              </div>
            </div>
            <div class="col s3">
              <div class="card-panel green darken-2">
                <span class="white-text"><i class="fas fa-house fa-3x"></i><h5>32</h5>accommodations in the heart of the park</span>
              </div>
            </div>
          </div>
        </div>
      </div>
  <div class="divider" style="border: 3px solid #388E3C"></div>
  <div class="container center-align">
    <div class="row">
      <br>
      <h2>Our advantages</h2>
      <ul class="collection with-header white-text left-align">
        <li class="collection-item green darken-2"><div>Remarkable facilities dedicated to the well-being of the animals.<i class="material-icons white secondary-content">check_circle</i></div></li>
        <li class="collection-item green darken-2"><div>Educational presentations and activities provided throughout the season by the Zoo's teams.<i class="material-icons white secondary-content">check_circle</i></div></li>
        <li class="collection-item green darken-2"><div>An exceptional approach to animal care: implementation of medical training techniques for animal healthcare.<i class="material-icons white secondary-content">check_circle</i></div></li>
      </ul>
    </div>
  </div>
  <div class="divider" style="border: 3px solid #388E3C"></div>
  <div class="container center-align">
    <h2>Jardin des Animaux it's...</h2>
    <div class="row">
      <div class="col s12">
        <div class="col s6">
          <div class="card-panel green darken-2">
            <span class="white-text"><i class="fas fa-users fa-3x"></i><br><h5>120</h5>employees: caretakers, veterinarians, receptionists, landscaping team, technical support, administration...</span>
          </div>
        </div>
        <div class="col s6">
          <div class="card-panel green darken-2">
            <span class="white-text"><i class="fas fa-user-friends fa-3x"></i><h5>400000</h5>visitors<br>per year.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="divider" style="border: 3px solid #388E3C"></div>
  <div class="container center-align">
    <div class="row">
      <h2>The key dates of Jardin des Animaux</h2>
    </div>
  </div>
  <div class="row" style="margin-left: 300px">
    <ul class="dates">
      <li><b>2023:</b> Legends of Africa, 2 new territories: one for lions and one for cheetahs, and opening of the Safari Suite.</li>
      <li><b>2022:</b> Australian Bush for red kangaroos, rock wallabies, and emus.</li>
      <li><b>2021:</b> South American aviary: squirrel monkeys, scarlet ibises, anteaters, and maras.</li>
      <li><b>2020:</b> Land of polar bears and creation of 2 Safari Lodges in the polar bear universe.</li>
      <li><b>2019:</b> Opening of 4 Safari Lodges - Sumatran tiger and cheetah universe.</li>
      <li><b>2015:</b> Renovation of the catering area and opening of a Safari Lodge - polar bear universe.</li>
      <li><b>2012:</b> Nosy Komba, the island of lemurs.</li>
      <li><b>2006:</b> Black panthers.</li>
      <li><b>1998:</b> Educational presentations of macaws.</li>
      <li><b>1990:</b> Island of chimpanzees.</li>
      <li><b>1946:</b> Creation of the park.</li>
    </ul>
  </div>
</main>
<?php
$content = ob_get_clean();
include "includes/template.php";
?>