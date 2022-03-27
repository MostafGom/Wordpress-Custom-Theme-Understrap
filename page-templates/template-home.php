<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<div class="home-banner">
    <div class="container">
        <h1>Elevated State Of Mind</h1>
    </div>
</div>

<div class="home-call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a class="call-to-action first">
                        <div class="image"></div>
                        <div class="title">Serenity&nbsp;Action</div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="call-to-action second">
                        <div class="image"></div>
                        <div class="title">Embrace&nbsp;Now!</div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="call-to-action third">
                        <div class="image"></div>
                        <div class="title">Natural&nbsp;Breath</div>
                    </a>
                </div>
            </div>
        </div>
</div>





<?php
get_footer();
