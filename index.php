<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post();

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
    $banner_background_image = get_field('banner_background_image');
	  
    $huge_video_1 = get_field('image_first_huge_video');
  	$huge_video_2 = get_field('image_second_huge_video');
	  
    $programs_1 = get_field('programm_1');
    $programs_2 = get_field('programm_2');
	  
    $intervenants = get_field('people');
?>

  <section class="landing" style="background-image: url('<?php echo $banner_background_image['url']; ?>')">
    <span class="info-title"><?php the_field('banner_baseline'); ?></span>
    <span class="title"><?php the_field('banner_title_brown'); ?></span>
    <span class="title light-green"><?php the_field('banner_title_green'); ?></span>
    <a href="<?php the_field('register-link'); ?>" target="blank"><span class="button">S'inscrire aux rencontres</span></a>
  </section>

  <section class="content-section">
    <span class="title"><?php the_field('about_title'); ?></span>
    <p class="content"><?php the_field('about_content'); ?></p>
  </section>

  <div class="bandeau" id="bandeau-programme"></div>

  <section class="content-section yellow">
    <span class="title"><?php the_field('program_title_brown'); ?></span>
    <div class="next">

      <div class="schedule">
          <span class="small-title"><?php the_field('program_small_title_1'); ?></span>
        <?php foreach($programs_1 as $program): ?>
          <div class="event">
            <span class="hour"><?php echo $program['hour']; ?></span>
            <span class="event-name"><?php echo $program['description']; ?></span>
          </div>
        <?php endforeach; ?>
      </div>

        <div class="schedule">
          <span class="small-title"><?php the_field('program_small_title_2'); ?></span>
        <?php foreach($programs_2 as $program): ?>
          <div class="event">
            <span class="hour"><?php echo $program['hour']; ?></span>
            <span class="event-name"><?php echo $program['description']; ?></span>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
    <a href="<?php the_field('register-link'); ?>" target="blank"><span class="button">S'inscrire aux rencontres</span></a>
    <img class="programme-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/programme.png" alt="">
  </section>

  <section class="content-section">
    <span class="title"><?php the_field('guests_title') ?></span>
    <p class="content"><?php the_field('guests_content') ?></p>
    <div class="intervenants">
      <?php foreach($intervenants as $orateur): ?>
		  <div class="personne">
			<div class="photo"></div>
			<div class="personne-name"><?php echo $orateur['name'] ?></div>
			<div class="personne-content"><?php echo $orateur['about'] ?></div>
			<a href="<?php echo $orateur['link'] ?>"><span class="button"><?php echo $orateur['text'] ?></span></a>
		  </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="content-section">
    <span class="title">Informations pratiques</span>
    <div class="infos-icons">
		<div class="left-image" style="background-image: url('')"></div>
		<div class="informations">
			<div class="information border-bottom">
				<img src="assets/img/picto-map.svg">
				<div class="text">
					<span>Square Brussels</span>
					<span>Mont des Arts</span>
					<span>1000 Bruxelles</span>
					<span>Belgique</span>
				</div>
			</div>
			<div class="information">
				<img src="assets/img/picto-time.svg">
				<div class="text">
					<span>Le 03.12.2019</span>
					<span>de 08h30 à 12h30</span>
				</div>
			</div>
			<div class="information border-top">
				<img src="assets/img/picto-dinner.svg">
				<div class="text">
					<span>Healthy</span>
					<span>Walking Dinner</span>
				</div>
			</div>
		</div>
		<div class="image" style="background-image: url('assets/img/lieu.png');"></div>
		<div class="map-link">
			<span>Voir sur la carte</span>
		</div>
    </div>
  </section>

  <section class="content-section">
    <span class="title"><?php the_field('videos_title'); ?></span>
	  <div class="all-videos">
		  <div class="videos">
			  <div class="huge-video" style="background-image: url('<?php echo $huge_video_1['url']; ?>')">
				  <div class="overlay">
				  <span class="video-title"><?php the_field('title_first_huge_video'); ?></span>
				  <span class="name"><?php the_field('person_first_huge_video'); ?></span>
				  </div>
			  </div>
			  <div class="small-video">
				  <img src="">
				  <div class="text">
					  <span class="video-title"><?php the_field('title_first_small_video_left'); ?></span>
					  <span class="name"><?php the_field('person_first_small_video_left'); ?></span>
				  </div>
			  </div>
			  <div class="small-video">
				  <img src="">
				  <div class="text">
					  <span class="video-title"><?php the_field('title_second_small_video_left'); ?></span>
					  <span class="name"><?php the_field('person_second_small_video_left'); ?></span>
				  </div>
			  </div>
		  </div>
		  <div class="videos">
			  <div class="huge-video"  style="background-image: url('<?php echo $huge_video_2['url']; ?>')">
				  <div class="overlay">
				  <span class="video-title"><?php the_field('title_second_huge_video'); ?></span>
				  <span class="name"><?php the_field('person_second_huge_video'); ?></span>
				  </div>
			  </div>
			  <div class="small-video">
				  <img src="">
				  <div class="text">
					  <span class="video-title"><?php the_field('title_first_small_video_right'); ?></span>
					  <span class="name"><?php the_field('person_first_small_video_right'); ?></span>
				  </div>
			  </div>
			  <div class="small-video">
				  <img src="">
				  <div class="text">
					  <span class="video-title"><?php the_field('title_second_small_video_right'); ?></span>
					  <span class="name"><?php the_field('person_second_small_video_right'); ?></span>
				  </div>
			  </div>
		  </div>
	  </div>
  </section>

<?php
  }
}
?>

</div>

<?php get_footer(); ?>