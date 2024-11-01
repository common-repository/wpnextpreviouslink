<?php
/**
 * Provide a dashboard view for the plugin
 *
 *
 * @link       https://codeboxr.com
 * @since      1.0.0
 *
 * @package    wpnextpreviouslink
 * @subpackage wpnextpreviouslink/templates/admin
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}
?>
<?php
$plugin_url = WPNextPreviousLinkHelper::url_utmy( 'https://codeboxr.com/product/show-next-previous-article-for-wordpress' );
$doc_url    = WPNextPreviousLinkHelper::url_utmy( 'https://codeboxr.com/doc/wpnextpreviouslink-doc/' );
?>
<div class="cbx-chota wpnextpreviouslink-page-wrapper wpnextpreviouslink-support-wrapper" id="wpnextpreviouslink-support">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2></h2>
                <?php do_action( 'wpnextpreviouslink_wpheading_wrap_before', 'support'); ?>
                <div class="wp-heading-wrap">
                    <div class="wp-heading-wrap-left pull-left">
                        <?php do_action( 'wpnextpreviouslink_wpheading_wrap_left_before','support'); ?>
                        <h1 class="wp-heading-inline wp-heading-inline-wpnextpreviouslink">
                            <?php esc_html_e( 'CBX Next Previous: Support & Docs', 'wpnextpreviouslink' ); ?>
                        </h1>
                        <?php do_action( 'wpnextpreviouslink_wpheading_wrap_left_after','support' ); ?>
                    </div>
                    <div class="wp-heading-wrap-right  pull-right">
                        <?php do_action( 'wpnextpreviouslink_wpheading_wrap_right_before','support' ); ?>
                        <a href="<?php echo esc_url(admin_url( 'options-general.php?page=wpnextpreviouslink' )); ?>" class="button outline primary"><?php esc_html_e( 'Global Settings', 'wpnextpreviouslink' ); ?></a>
                        <?php do_action( 'wpnextpreviouslink_wpheading_wrap_right_after','support' ); ?>
                    </div>
                </div>
                <?php do_action( 'wpnextpreviouslink_wpheading_wrap_after','support' ); ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="cbx-backend-card">
                    <div class="header">
                        <div class="text">
                            <h2><?php esc_html_e( 'Get Free & Pro Addons', 'wpnextpreviouslink' ); ?></h2>
                        </div>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="cbx-backend-feature-card">
                                    <div class="feature-card-body static">
                                        <div class="feature-card-header">
                                            <a href="<?php echo esc_url( $plugin_url ); ?>"
                                               target="_blank"> <img src="https://codeboxr.com/wp-content/uploads/productshots/8167-profile.webp"
                                                                     alt="CBX Next Previous Article for WordPress"/> </a>

                                        </div>
                                        <div class="feature-card-description">
                                            <h3>
                                                <a href="<?php echo esc_url( $plugin_url ); ?>"
                                                   target="_blank">CBX Next Previous Pro Addon</a></h3>
                                            <p>Pro features for CBX Next Previous plugin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="cbx-backend-card dashboard-changelog">
                    <div class="header">
                        <div class="text">
                            <h2><?php esc_html_e( 'Core Plugin Changelog', 'wpnextpreviouslink' ); ?></h2>
                        </div>
                    </div>
                    <div class="content">
                        <div class="cbx-backend-settings-row">
                            <p>
                                Version - 2.7.2
                            </p>
                            <ul>
                                <li>[new] Skip next prev for specific post/page id(s) - Request in wp.org support https://wordpress.org/support/topic/hide-on-few-pages/</li>
                                <li>[new] Post 'order by' per post basis (in core only date)</li>
                                <li>[new] Plugin check plugin used to check standard errors and warnings and fixed</li>
                            </ul>
                        </div>
                        <div class="cbx-backend-settings-row">
                            <p>
                                Version - 2.7.1
                            </p>
                            <ul>
                                <li>[improvement] Settings reset and import improved that is related with pro addon also</li>
                                <li>[new] New documentation page</li>
                                <li>[updated] Dashboard style improved</li>
                                <li>[new] PHP 8.2 compatible</li>
                                <li>[new] Added woocommerce like template system for different views which can be overrode using plugin and theme</li>
                                <li>[updated] Pro addon updated and new version 2.0.5 released</li>
                            </ul>
                        </div>
                        <div class="cbx-backend-settings-row">
                            <p>
                                Version - 2.7.0
                            </p>
                            <ul>
                                <li>[new] Settings Input fields checkbox and radio buttons style improved</li>
                                <li>[new] Settings dashboard revamped & improved</li>
                                <li>[update] Related pro addon V2.0.4 released</li>
                                <li>[new] Z-index for next prev arrow for better dynamic control from plugin's setting page</li>
                            </ul>
                        </div>
                        <div class="cbx-backend-settings-row">
                            <p>
                                Version - 2.6.6
                            </p>
                            <ul>
                                <li>[new] Extra filter hooks added in core</li>
                                <li>[new] New features in pro addon [looping next prev for single article]</li>
                            </ul>
                        </div>
                        <div class="cbx-backend-settings-row">
                            <p>
                                Version - 1.0.14
                            </p>
                            <ul>
                                <li>[improvements] Date display format now can be changed using filter 'wpnextpreviouslink_release_date_format'</li>
                                <li>[new] Pro Addon updated</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cbx-backend-card dashboard-changelog dashboard-changelogpro">
                    <div class="header">
                        <div class="text">
                            <h2><?php esc_html_e('Pro Addon Changelog', 'wpnextpreviouslink'); ?></h2>
                        </div>
                    </div>
                    <div class="content">
                        <div class="cbx-backend-settings-row">
                            <p>
                                Version - 2.0.6
                            </p>
                            <ul>
                                <li>[new] Added custom menu order as Post 'order by' per post basis</li>
                                <li>[new] Added custom menu order for custom post type</li>
                                <li>[new] Plugin check plugin used to check standard errors and warnings and fixed</li>
                            </ul>
                        </div>
                        <div class="cbx-backend-settings-row">
                            <p>
                                Version - 2.0.5
                            </p>
                            <ul>
                                <li>[new] Single setting export/import</li>
                                <li>[new] Reset single setting</li>
                                <li>[new] PHP 8.2 compatibility checked</li>
                            </ul>
                        </div>
                        <div class="cbx-backend-settings-row">
                            <p>
                                Version - 2.0.4
                            </p>
                            <ul>
                                <li>[new] From version 2.0.4 readme.txt file added for changelog tracking</li>
                                <li>[new] Settings export and import as json</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="cbx-backend-card dashboard-support">
                    <div class="header">
                        <div class="text">
                            <h2><?php esc_html_e( 'Help & Supports', 'wpnextpreviouslink' ); ?></h2>
                        </div>
                    </div>
                    <div class="content">
                        <div class="cbx-backend-settings-row">
                            <a href="<?php echo esc_url( $plugin_url ); ?>" target="_blank">
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <defs/>
                                    <path d="M10 2.6c-4.4 0-7.9 3.6-7.9 7.9s3.6 7.9 7.9 7.9 7.9-3.6 7.9-7.9-3.5-7.9-7.9-7.9zm1.7 12.3c-.4.2-.7.3-1 .4-.2.1-.5.1-.8.1-.5 0-.9-.1-1.2-.4-.3-.2-.4-.5-.4-.9v-.4c0-.2.1-.3.1-.5l.5-1.8c0-.2.1-.4.1-.5v-.4c0-.2 0-.4-.1-.5-.1-.1-.3-.2-.5-.2-.1 0-.3 0-.4.1-.2 0-.3.1-.4.1l.1-.6c.3-.1.7-.3 1-.3.3-.1.6-.2.9-.2.5 0 .9.1 1.1.4.3.2.4.5.4.9v.4c0 .2-.1.4-.1.5l-.5 1.9c0 .1-.1.3-.1.5v.4c0 .2.1.4.2.5.1.1.3.1.6.1.1 0 .3 0 .4-.1.2 0 .3-.1.3-.1l-.2.6zm-.1-7.3c-.2.2-.5.3-.9.3-.3 0-.6-.1-.9-.3-.2-.2-.3-.5-.3-.8 0-.3.1-.6.4-.8.2-.2.5-.3.9-.3.3 0 .6.1.9.3.2.2.4.5.4.8-.2.3-.3.6-.5.8z"
                                          fill="currentColor"/>
                                </svg>
			                    <?php esc_html_e( 'CBX Next Previous Plugin Details', 'wpnextpreviouslink' ); ?> </a>
                        </div>
                        <div class="cbx-backend-settings-row">
                            <a href="<?php echo esc_url($doc_url); ?>" target="_blank">
                                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5834 3.75C12.9584 3.75 11.2084 4.08333 10 5C8.79171 4.08333 7.04171 3.75 5.41671 3.75C4.20837 3.75 2.92504 3.93333 1.85004 4.40833C1.24171 4.68333 0.833374 5.275 0.833374 5.95V15.35C0.833374 16.4333 1.85004 17.2333 2.90004 16.9667C3.71671 16.7583 4.58337 16.6667 5.41671 16.6667C6.71671 16.6667 8.10004 16.8833 9.21671 17.4333C9.71671 17.6833 10.2834 17.6833 10.775 17.4333C11.8917 16.875 13.275 16.6667 14.575 16.6667C15.4084 16.6667 16.275 16.7583 17.0917 16.9667C18.1417 17.2417 19.1584 16.4417 19.1584 15.35V5.95C19.1584 5.275 18.75 4.68333 18.1417 4.40833C17.075 3.93333 15.7917 3.75 14.5834 3.75ZM17.5 14.3583C17.5 14.8833 17.0167 15.2667 16.5 15.175C15.875 15.0583 15.225 15.0083 14.5834 15.0083C13.1667 15.0083 11.125 15.55 10 16.2583V6.66667C11.125 5.95833 13.1667 5.41667 14.5834 5.41667C15.35 5.41667 16.1084 5.49167 16.8334 5.65C17.2167 5.73333 17.5 6.075 17.5 6.46667V14.3583Z"
                                          fill="currentColor"></path>
                                    <path d="M11.65 9.17504C11.3833 9.17504 11.1416 9.00837 11.0583 8.74171C10.95 8.41671 11.1333 8.05838 11.4583 7.95838C12.7416 7.54171 14.4 7.40838 15.925 7.58338C16.2666 7.62504 16.5166 7.93338 16.475 8.27504C16.4333 8.61671 16.125 8.86671 15.7833 8.82504C14.4333 8.66671 12.9583 8.79171 11.8416 9.15004C11.775 9.15837 11.7083 9.17504 11.65 9.17504ZM11.65 11.3917C11.3833 11.3917 11.1416 11.225 11.0583 10.9584C10.95 10.6334 11.1333 10.275 11.4583 10.175C12.7333 9.75837 14.4 9.62504 15.925 9.80004C16.2666 9.84171 16.5166 10.15 16.475 10.4917C16.4333 10.8334 16.125 11.0834 15.7833 11.0417C14.4333 10.8834 12.9583 11.0084 11.8416 11.3667C11.779 11.3827 11.7146 11.3911 11.65 11.3917ZM11.65 13.6084C11.3833 13.6084 11.1416 13.4417 11.0583 13.175C10.95 12.85 11.1333 12.4917 11.4583 12.3917C12.7333 11.975 14.4 11.8417 15.925 12.0167C16.2666 12.0584 16.5166 12.3667 16.475 12.7084C16.4333 13.05 16.125 13.2917 15.7833 13.2584C14.4333 13.1 12.9583 13.225 11.8416 13.5834C11.779 13.5993 11.7146 13.6077 11.65 13.6084Z"
                                          fill="currentColor"></path>
                                </svg>
			                    <?php esc_html_e('Documentation & User Guide', 'wpnextpreviouslink'); ?> </a>
                        </div>
                        <div class="cbx-backend-settings-row">
                            <a href="https://wordpress.org/support/plugin/wpnextpreviouslink/reviews/#new-post" target="_blank">
                                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.3 8.1c-.1-.3-.3-.5-.6-.5l-4.8-.7-2.2-4.4c-.1-.3-.4-.4-.7-.4-.3 0-.5.2-.7.4L7.2 6.9l-4.9.7c-.3 0-.5.2-.6.5-.1.3 0 .6.2.8l3.5 3.4-.8 4.7c0 .3.1.6.3.7.1.1.3.1.4.1.1 0 .2 0 .4-.1l4.3-2.3 4.3 2.3c.1.1.2.1.4.1.4 0 .8-.3.8-.8v-.2l-.8-4.8 3.5-3.4c.1 0 .2-.3.1-.5z"
                                          fill="currentColor"/>
                                </svg>
			                    <?php esc_html_e('Review & Rate CBX Next Previous Article', 'wpnextpreviouslink'); ?> </a>
                        </div>
                        <div class="cbx-backend-settings-row">
                            <a href="https://wordpress.org/support/plugin/wpnextpreviouslink/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22">
                                    <defs/>
                                    <path fill="currentColor" fill-rule="evenodd"
                                          d="M16 2H3c-.55 0-1 .45-1 1v14l4-4h10c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm-1 2v7H5.17L4 12.17V4h11zm4 2h2c.55 0 1 .45 1 1v15l-4-4H7c-.55 0-1-.45-1-1v-2h13V6z"
                                          clip-rule="evenodd"/>
                                </svg>
			                    <?php esc_html_e('Core Plugin Support', 'wpnextpreviouslink'); ?></a>
                        </div>
                        <div class="cbx-backend-settings-row">
                            <a href="https://codeboxr.com/contact-us" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22">
                                    <defs/>
                                    <path fill="currentColor" fill-rule="evenodd"
                                          d="M16 2H3c-.55 0-1 .45-1 1v14l4-4h10c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm-1 2v7H5.17L4 12.17V4h11zm4 2h2c.55 0 1 .45 1 1v15l-4-4H7c-.55 0-1-.45-1-1v-2h13V6z"
                                          clip-rule="evenodd"/>
                                </svg>
			                    <?php esc_html_e('Pro Addon Support', 'wpnextpreviouslink'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="cbx-backend-card dashboard-wp-plugin">
                    <div class="header">
                        <div class="text">
                            <h2><?php esc_html_e('Other WordPress Plugins', 'wpnextpreviouslink'); ?></h2>
                        </div>
                    </div>
                    <div class="content">
			            <?php
			            $top_plugins = [
				            //'https://codeboxr.com/product/show-next-previous-article-for-wordpress' => 'CBX Next Previous Article ',
				            'https://codeboxr.com/product/cbx-wordpress-bookmark/' => 'CBX Bookmark & Favorite',
				            'https://codeboxr.com/product/cbx-changelog-for-wordpress/' => 'CBX Changelog',
				            'https://codeboxr.com/product/cbx-tour-user-walkthroughs-guided-tours-for-wordpress/' => 'CBX Tour – User Walkthroughs/Guided Tours',
				            'https://codeboxr.com/product/cbx-currency-converter-for-wordpress/' => 'CBX Currency Converter',
				            'https://codeboxr.com/product/cbx-email-logger-for-wordpress/' => 'CBX Email SMTP & Logger',
				            'https://codeboxr.com/product/cbx-petition-for-wordpress/' => 'CBX Petition',
				            'https://codeboxr.com/product/cbx-accounting/' => 'CBX Accounting',
				            'https://codeboxr.com/product/cbx-poll-for-wordpress/' => 'CBX Poll',
				            'https://codeboxr.com/product/cbx-multi-criteria-rating-review-for-wordpress/' => 'CBX Multi Criteria Rating & Review',
				            'https://codeboxr.com/product/cbx-user-online-for-wordpress/' => 'CBX User Online & Last Login',
				            'https://codeboxr.com/product/woocommerce-product-dropdown-field-for-contact-form7/' => 'Woocommerce Product Dropdown field for Contact Form7',
			            ];

			            foreach ($top_plugins as $link => $title){
				            echo '<div class="cbx-backend-settings-row">
                            <a href="'.esc_url($link).'" target="_blank">
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <defs/>
                                    <path d="M16.4 9.1L12.2 5c-.3-.3-.7-.3-1-.2s-.6.5-.6.9v1.7H4.2c-.5 0-.9.4-.9.9v3.4c0 .2.1.5.3.7.2.2.4.3.7.3h6.4v1.7c0 .4.2.7.6.9.4.1.8.1 1-.2l4.1-4.2c.4-.5.4-1.3 0-1.8z"
                                          fill="currentColor"/>
                                </svg>
                                '.esc_attr($title).'</a>
                        </div>';
			            }
			            ?>
                    </div>
                </div>
                <div class="cbx-backend-card dashboard-wp-plugin">
                    <div class="header">
                        <div class="text">
                            <h2><?php esc_html_e('Codeboxr News Updates', 'wpnextpreviouslink'); ?></h2>
                        </div>
                    </div>
                    <div class="content">
			            <?php

			            include_once(ABSPATH.WPINC.'/feed.php');
			            if (function_exists('fetch_feed')) {
				            //$feed = fetch_feed( 'https://codeboxr.com/feed?post_type=product' );
				            $feed = fetch_feed('https://codeboxr.com/feed?post_type=post');
				            if ( ! is_wp_error($feed)) : $feed->init();
					            $feed->set_output_encoding('UTF-8');     // this is the encoding parameter, and can be left unchanged in almost every case
					            $feed->handle_content_type();            // this double-checks the encoding type
					            $feed->set_cache_duration(21600);        // 21,600 seconds is six hours
					            $limit = $feed->get_item_quantity(10);   // fetches the 18 most recent RSS feed stories
					            $items = $feed->get_items(0, $limit);    // this sets the limit and array for parsing the feed

					            $blocks = array_slice($items, 0, 10);

					            foreach ($blocks as $block) {
						            $url = $block->get_permalink();
						            $url = WPNextPreviousLinkHelper::url_utmy($url); ?>
                                    <div class="cbx-backend-settings-row">
                                        <a href="<?php echo esc_url($url); ?>" target="_blank">
                                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <defs/>
                                                <path d="M16.4 9.1L12.2 5c-.3-.3-.7-.3-1-.2s-.6.5-.6.9v1.7H4.2c-.5 0-.9.4-.9.9v3.4c0 .2.1.5.3.7.2.2.4.3.7.3h6.4v1.7c0 .4.2.7.6.9.4.1.8.1 1-.2l4.1-4.2c.4-.5.4-1.3 0-1.8z"
                                                      fill="currentColor"/>
                                            </svg>
								            <?php echo esc_attr($block->get_title()); ?></a>
                                    </div>
						            <?php
					            }//end foreach
				            endif;
			            }
			            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>