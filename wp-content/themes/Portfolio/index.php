<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Portfolio Sebastien huertas
 * @since V 1.0
 */
get_header(); ?>


    <article class="P-H-main">
        

        <div class="C-card">
            <a href="">
                <div class="C-cardTop C-Arkeron">
                    <img src="<?php bloginfo("template_directory");?>/ressources/axelGenius.jpg" alt="img test">
                </div>
                <div class="C-cardBottom C-borderArkeron">
                    <h3>
                        Arkeron
                    </h3>

                    <p class="C-author">
                        &#123; Présentation &#125;
                    </p>
                </div>
            </a>
        </div>
        <div class="C-card">
            <a href="">
                <div class="C-cardTop C-Sebastien">
                    <img src="<?php bloginfo("template_directory");?>/ressources/sebGenius.jpg" alt="img test">
                </div>
                <div class="C-cardBottom C-borderSebastien">
                    <h3>
                        Sébastien Huertas
                    </h3>

                    <p class="C-author">
                        &#123; Présentation &#125;
                    </p>

                </div>
            </a>
        </div>

        <div class="C-card">
            <a href="">
                <div class="C-cardTop C-Arkeron">
                    <img src="<?php bloginfo("template_directory");?>/ressources/neutreGenius.jpg" alt="img test">
                </div>
                <div class="C-cardBottom C-borderArkeron">
                    <h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, natus!
                    </h3>

                    <p class="C-author">
                        Arkeron <span> - le 10 08 2017</span>
                    </p>
                    <div class="C-wrapPins">
                        <p class="C-pins Ch-G-Js">
                            Js
                        </p>
                        <p class="C-pins Ch-G-Ai">
                            Ai
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="C-card">
            <a href="">
                <div class="C-cardTop C-Arkeron">
                    <img src="<?php bloginfo("template_directory");?>/ressources/neutreGenius.jpg" alt="img test">
                </div>
                <div class="C-cardBottom C-borderArkeron">
                    <h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, natus!
                    </h3>

                    <p class="C-author">
                        Arkeron <span> - le 10 08 2017</span>
                    </p>
                    <div class="C-wrapPins">
                        <p class="C-pins Ch-G-Js">
                            Js
                        </p>
                        <p class="C-pins Ch-G-Ai">
                            Ai
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="C-card">
            <a href="">
                <div class="C-cardTop C-Arkeron">
                    <img src="<?php bloginfo("template_directory");?>/ressources/neutreGenius.jpg" alt="img test">
                </div>
                <div class="C-cardBottom C-borderArkeron">
                    <h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, natus!
                    </h3>

                    <p class="C-author">
                        Arkeron <span> - le 10 08 2017</span>
                    </p>
                    <div class="C-wrapPins">
                        <p class="C-pins Ch-G-Js">
                            Js
                        </p>
                        <p class="C-pins Ch-G-Ai">
                            Ai
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="C-card">
            <a href="">
                <div class="C-cardTop C-Arkeron">
                    <img src="<?php bloginfo("template_directory");?>/ressources/neutreGenius.jpg" alt="img test">
                </div>
                <div class="C-cardBottom C-borderArkeron">
                    <h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, natus!
                    </h3>

                    <p class="C-author">
                        Arkeron <span> - le 10 08 2017</span>
                    </p>
                    <div class="C-wrapPins">
                        <p class="C-pins Ch-G-Js">
                            Js
                        </p>
                        <p class="C-pins Ch-G-Ai">
                            Ai
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="C-card">
            <a href="">
                <div class="C-cardTop C-Arkeron">
                    <img src="<?php bloginfo("template_directory");?>/ressources/neutreGenius.jpg" alt="img test">
                </div>
                <div class="C-cardBottom C-borderArkeron">
                    <h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, natus!
                    </h3>

                    <p class="C-author">
                        Arkeron <span> - le 10 08 2017</span>
                    </p>
                    <div class="C-wrapPins">
                        <p class="C-pins Ch-G-Js">
                            Js
                        </p>
                        <p class="C-pins Ch-G-Ai">
                            Ai
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </article>

    <?php get_footer(); ?>