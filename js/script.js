/**
 * @file
 * A JavaScript file for the theme.
 */

(function ($) {
  Drupal.behaviors.de_theme_cwrc_featured_projects = {
    attach: function (context, settings) {
      "use strict";

      $('.view-nodequeue-projects-featured', context).each(function (index) {
        $(this).find('.view-content').once('de_theme_cwrc_featured_projects_slickify').slick();
      });
    }
  };

  $(function() {
      $('.islandora-basic-collection-grid .islandora-basic-collection-object').matchHeight();
      $('.islandora-solr-grid .solr-grid-field').matchHeight();
      $('.cwrc-project-homepage .group-footer .field-collection-container .field-items .field-item').matchHeight();
  });

})(jQuery);
