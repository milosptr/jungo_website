jQuery(document).ready(function () {
  // Default view of projects
  jQuery('.project-box').fadeOut();
  jQuery('.project-box').each(function () {
    if (jQuery(this).attr('data-project') === 'websites') {
      jQuery(this).fadeIn();
    }
  });

  jQuery('#portfolio .portfolio-navigation li').click(function () {

    // Add class to the clicked element
    jQuery('.portfolio-navigation li').removeClass('active');
    jQuery(this).addClass('active');

    // Get clicked value
    const projectType = jQuery(this).text().toLowerCase().split(' ');
    let projects = "";
    for (let i = 0; i < projectType.length; i++) {
      if (projectType[i] !== "&")
        projects += projectType[i] + "-";
    }
    projects = projects.slice(0, -1);

    // Hide unrelative projects and show only relative
    jQuery('.project-box').fadeOut();
    jQuery('.project-box').each(function () {
      if (jQuery(this).attr('data-project') === projects) {
        jQuery(this).fadeIn();
      }
    });
  });
});