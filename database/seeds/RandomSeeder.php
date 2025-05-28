<?php

use Illuminate\Database\Seeder;

class RandomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // FAQ
        DB::table('faq')->insertOrIgnore([
            [
            	'id' => '1',
            	'locale' => 'en', 
            	'faq_question' => '<div style="text-align: center;">hello world faq</div>

                <div>&nbsp;</div>

                <div style="text-align: center;"><a class="btn btn-lg btn-success" href="#"><span class="text">A Button</span></a></div>

                <div>
                <div class="youtube-embed-wrapper" style="position:relative;padding-bottom:56.25%;padding-top:30px;height:0;overflow:hidden"><iframe allowfullscreen="" frameborder="0" height="480" src="https://www.youtube.com/embed/CraQkBSFVxg?rel=0&amp;controls=0" style="position:absolute;top:0;left:0;width:100%;height:100%" width="640"></iframe></div>

                <div>&nbsp;</div>
                </div>

                <div>&nbsp;</div>

                <div>
                <table border="0" cellpadding="1" cellspacing="1" style="width: 1395px;">
                	<tbody>
                		<tr>
                			<td style="width: 743px;">
                			<h1 style="text-align: center;"><span style="line-height:1;">hello world</span></h1>

                			<div>&nbsp;</div>

                			<div style="text-align: justify;"><span style="line-height:1;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />
                			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />
                			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />
                			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />
                			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />
                			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>
                			</td>
                			<td style="width: 650px;"><img alt="" src="http://192.168.0.116/public/uploads/1635406535.jpg" style="width: 500px; height: 500px;" /></td>
                		</tr>
                	</tbody>
                </table>

                <div>&nbsp;</div>
                </div>

                <div>&nbsp;</div>

                <div>&nbsp;</div>

                <div>
                <div class="youtube-embed-wrapper" style="position:relative;padding-bottom:56.25%;padding-top:30px;height:0;overflow:hidden"><iframe allowfullscreen="" frameborder="0" height="500" src="https://www.youtube.com/embed/WVGChZZfvbQ?rel=0&amp;controls=0" style="position:absolute;top:0;left:0;width:100%;height:100%" width="500"></iframe></div>

                <div>&nbsp;</div>
                </div>
                ',
                'faq_answer' => 'the answer is coming soon',
            	'created_at' => now(), 
            	'updated_at' => now(), 
            	'deleted_at' => ''
            ]
        ]);


        // PRIVACY
        DB::table('privacy')->insertOrIgnore([
            [
            	'id' => '1',
            	'locale' => 'en', 
            	'privacy_editor' => '
                The standard Lorem Ipsum passage, used since the 1500s
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"

1914 translation by H. Rackham
"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"

Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."

1914 translation by H. Rackham
"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."
                ',
                'terms_conditions' => '
                The standard Lorem Ipsum passage, used since the 1500s
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"

1914 translation by H. Rackham
"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"

Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."

1914 translation by H. Rackham
"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."
                ',
            	'created_at' => now(), 
            	'updated_at' => now(), 
            	'deleted_at' => ''
            ]
        ]);

        // NEWSLETTER
        DB::table('newsletter')->insertOrIgnore([
            [
            	'id' => '1',
            	'locale' => 'en', 
            	'nl_classification' => 'Nelly',
            	'nl_title' => 'test data',
            	'nl_content' => 'test data',
            	'nl_author' => 'test data',
            	'nl_release' => '2022/01/27',
            	'nl_update' => now(),
            	'created_at' => now(), 
            	'updated_at' => now(), 
            	'deleted_at' => ''
            ]
        ]);

        //	GENERAL SETTINGS
        DB::table('general_settings')->insertOrIgnore([
            [
            	'id' => '1',
            	'locale' => 'en', 
            	'web_name' => 'masiko',
            	'web_url' => 'www.julietgardens.com',
            	'web_keywords' => 'Software engineering',
            	'web_description' => 'website default description',
            	'web_meta_data' => 'meta data',
            	'web_scripts' => 'under seo tab in settings',
            	'web_auth' => 'not sure',
            	'web_service_mail' => 'julietgardens@example.com',
            	'web_return_mail' => 'ecommerce or pos',
            	'web_order_mail' => 'julietgardens@example.com',
            	'web_default_smtp' => 'TLS',
            	'web_logo' => '/images/frontend/19.jpg',
            	'created_at' => now(), 
            	'updated_at' => now(), 
            	'deleted_at' => ''
            ]
        ]);

        //	SMTP
        DB::table('smtp')->insertOrIgnore([
            [
                'id' => '1',
                'smtp_type' => 'TLS',
                'smtp_host' => '1.smtp.google.auth',
                'smtp_port' => '25',
                'smtp_username' => 'dd.cloud.google',
                'smtp_password' => 'yyessnoo',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);

        //	FTP
        DB::table('ftp')->insertOrIgnore([
            [
                'id' => '1',
                'ftp_host' => 'hosting site',
                'ftp_port' => '21',
                'ftp_username' => 'ftp username',
                'ftp_password' => 'ftp password',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);

        // Social Media
        DB::table('social_media')->insertOrIgnore([
            [
                'id' => '1',
                'locale' => 'en',
                's_name' => 'Facebook',
                's_target' => '_blank',
                's_visibility' => '1',
                's_url' => 'https://www.facebook.com/',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '2',
                'locale' => 'en',
                's_name' => 'Twitter',
                's_target' => '_blank',
                's_visibility' => '1',
                's_url' => 'https://www.twitter.com/',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '3',
                'locale' => 'en',
                's_name' => 'Dribbble',
                's_target' => '_blank',
                's_visibility' => '1',
                's_url' => 'https://www.dribbble.com/',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '4',
                'locale' => 'en',
                's_name' => 'Vimeo',
                's_target' => '_blank',
                's_visibility' => '1',
                's_url' => 'https://www.vimeo.com/',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);
        
        //  About Us
        DB::table('about_us')->insertOrIgnore([
            [
                'id' => '1',
                'locale' => 'en', 
                'page_title' => 'Juliet',
                'page_keywords' => 'Farming',
                'page_description' => 'default description',
                'header_title' => 'Title',
                'header_description' => 'Fusce eget nisi ac tellus dapibus eleifend in in erat. Vestibulum eu leo quis diam blandit rutrum et eu dui. Vivamus vitae euismod diam.',
                'header_title_two' => 'Why Choose Us',
                'header_description_two' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.',
                'header_description_three' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.',
                'section_quote' => 'Agriculture Not Only Gives Riches To A Nation, But The Only Riches She Can Call Her Own',
                'header_title_four' => 'Meet Our Amazing Team',
                'header_description_four' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.',
                'page_content' => 'Sed eros urna, rhoncus nec tortor quis, pretium vestibulum purus. Nunc quis augue nibh. Proin non enim non nulla scelerisque scelerisque vitae non est. Quisque iaculis leo at lacus malesuada mattis.',
                'page_image' => '/images/frontend/banner.jpg',
                'page_image_two' => '/images/frontend/9.jpg',
                'farm_seeds' => '50',
                'farm_growth' => '50',
                'farm_economy' => '50',
                'farm_planting' => '50',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);

        //  About Us Team
        DB::table('about_us_team')->insertOrIgnore([
            [
                'id' => '1',
                'about_us_team_name' => 'Jane Doe',
                'about_us_team_title' => 'CFO',
                'about_us_team_image' => '/images/frontend/16.jpg',
                'about_us_team_socials_one' => 'facebook',
                'about_us_team_socials_two' => 'twitter',
                'about_us_team_socials_three' => 'instagram',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '2',
                'about_us_team_name' => 'John Doe',
                'about_us_team_title' => 'CEO',
                'about_us_team_image' => '/images/frontend/14.jpg',
                'about_us_team_socials_one' => 'facebook',
                'about_us_team_socials_two' => 'twitter',
                'about_us_team_socials_three' => 'instagram',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '2',
                'about_us_team_name' => 'Zodwa Sihlongonyane',
                'about_us_team_title' => 'Janitor',
                'about_us_team_image' => '/images/frontend/15.jpg',
                'about_us_team_socials_one' => 'facebook',
                'about_us_team_socials_two' => 'twitter',
                'about_us_team_socials_three' => 'instagram',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);

        //  Services
        DB::table('services')->insertOrIgnore([
            [
                'id' => '1',
                'locale' => 'en', 
                'page_title' => 'Masiko',
                'page_keywords' => 'Farming',
                'page_description' => 'default description',
                'header_title' => 'Our Services',
                'header_description' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin',
                'services_featured_title' => 'Our Featured Services',
                'services_featured_description' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin',
                'services_we_do_title' => 'What We Do',
                'services_we_do_description' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin',
                'services_testimonials_title' => 'Our Testimonials',
                'services_testimonials_description' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin',
                'page_image' => '/images/frontend/banner.jpg',
                'page_image_two' => '/images/frontend/9.jpg',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);

        //  Services Featured
        DB::table('services_featured')->insertOrIgnore([
            [
                'id' => '1',
                'service_featured_title' => 'Ut Et Turpis Interdum',
                'service_featured_description' => 'Fusce eget nisi ac tellus dapibus eleifend in in erat. Vestibulum eu leo quis diam blandit rutrum et eu dui. Vivamus vitae euismod diam.',
                'service_featured_image' => '/images/frontend/13.png',
                'service_featured_sort' => '',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '2',
                'service_featured_title' => 'Vivamus Vitae Euismod',
                'service_featured_description' => 'Fusce eget nisi ac tellus dapibus eleifend in in erat. Vestibulum eu leo quis diam blandit rutrum et eu dui. Vivamus vitae euismod diam.',
                'service_featured_image' => '/images/frontend/14.png',
                'service_featured_sort' => '',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '3',
                'service_featured_title' => 'Blandit Rutrum Et Erat',
                'service_featured_description' => 'Fusce eget nisi ac tellus dapibus eleifend in in erat. Vestibulum eu leo quis diam blandit rutrum et eu dui. Vivamus vitae euismod diam.',
                'service_featured_image' => '/images/frontend/15.png',
                'service_featured_sort' => '',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '4',
                'service_featured_title' => 'Felis Leo Sodales Lacus',
                'service_featured_description' => 'Fusce eget nisi ac tellus dapibus eleifend in in erat. Vestibulum eu leo quis diam blandit rutrum et eu dui. Vivamus vitae euismod diam.',
                'service_featured_image' => '/images/frontend/16.png',
                'service_featured_sort' => '',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);

        //  Services We Do
        DB::table('services_we_do')->insertOrIgnore([
            [
                'id' => '1',
                'service_we_do_title' => 'Fertilizing',
                'service_we_do_description' => 'Quisque faucibus scelerisque eros, molestie tristique lacus posuere in.dadfadfadfadfsadfaeafadfadfadfasefasadfadfadfewefadsfasefwfsdfdda',
                'service_we_do_image' => '/images/frontend/4.jpg',
                'service_we_do_sort' => '',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '2',
                'service_we_do_title' => 'Soil Testing',
                'service_we_do_description' => 'Quisque faucibus scelerisque eros, molestie tristique lacus posuere in.',
                'service_we_do_image' => '/images/frontend/5.jpg',
                'service_we_do_sort' => '',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '3',
                'service_we_do_title' => 'Planting',
                'service_we_do_description' => 'Quisque faucibus scelerisque eros, molestie tristique lacus posuere in.',
                'service_we_do_image' => '/images/frontend/6.jpg',
                'service_we_do_sort' => '',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);

        //  Services Testimonials
        DB::table('services_testimonials')->insertOrIgnore([
            [
                'id' => '1',
                'service_testimonials_title' => 'Vivamus Malesuada Pellentesque Nunc Id \'Condim\'',
                'service_testimonials_description' => 'Duis porttitor magna leo, ac feugiat nibh bibendum at. Duis porttitor placerat ex a fermentum. Praesent et dolor dignissim, fringilla enim vitae, tristique enim.',
                'service_testimonials_image' => '/images/frontend/13.jpg',
                'service_testimonials_name' => 'Andria Carl',
                'service_testimonials_rating' => '3',
                'service_testimonials_type' => 'Customer',
                'service_testimonials_sort' => '',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '2',
                'service_testimonials_title' => 'Vivamus Malesuada Pellentesque Nunc Id \'Condim\'',
                'service_testimonials_description' => 'Duis porttitor magna leo, ac feugiat nibh bibendum at. Duis porttitor placerat ex a fermentum. Praesent et dolor dignissim, fringilla enim vitae, tristique enim.',
                'service_testimonials_image' => '/images/frontend/14.jpg',
                'service_testimonials_name' => 'Henry Paul ',
                'service_testimonials_rating' => '1',
                'service_testimonials_type' => 'Visitor',
                'service_testimonials_sort' => '',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '3',
                'service_testimonials_title' => 'Vivamus Malesuada Pellentesque Nunc Id \'Condim\'',
                'service_testimonials_description' => 'Duis porttitor magna leo, ac feugiat nibh bibendum at. Duis porttitor placerat ex a fermentum. Praesent et dolor dignissim, fringilla enim vitae, tristique enim.',
                'service_testimonials_image' => '/images/frontend/15.jpg',
                'service_testimonials_name' => 'Andria Carl',
                'service_testimonials_rating' => '3',
                'service_testimonials_type' => 'Visitor',
                'service_testimonials_sort' => '',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '4',
                'service_testimonials_title' => 'Vivamus Malesuada Pellentesque Nunc Id \'Condim\'',
                'service_testimonials_description' => 'Duis porttitor magna leo, ac feugiat nibh bibendum at. Duis porttitor placerat ex a fermentum. Praesent et dolor dignissim, fringilla enim vitae, tristique enim.',
                'service_testimonials_image' => '/images/frontend/16.jpg',
                'service_testimonials_name' => 'Laura More',
                'service_testimonials_rating' => '5',
                'service_testimonials_type' => 'Customer',
                'service_testimonials_sort' => '',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);

        // Gallery
        DB::table('gallery')->insertOrIgnore([
            [
                'id' => '1',
                'locale' => 'en', 
                'page_title' => 'Juliet',
                'page_keywords' => 'Farming',
                'page_description' => 'default description',
                'header_title' => 'Our Gallery',
                'header_description' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.',
                'content_header_title' => 'See Our Gallery',
                'content_header_description' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.',
                'page_image' => '/images/frontend/banner.jpg',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);

        // Gallery Images
        DB::table('gallery_images')->insertOrIgnore([
            [
                'id' => '1',
                'image_title' => 'Garlic',
                'image_description' => '',
                'image' => '/images/frontend/17.jpg',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '2',
                'image_title' => 'Pepper',
                'image_description' => '',
                'image' => '/images/frontend/18.jpg',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '3',
                'image_title' => 'Ginger',
                'image_description' => '',
                'image' => '/images/frontend/19.jpg',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '4',
                'image_title' => 'Potato',
                'image_description' => '',
                'image' => '/images/frontend/20.jpg',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '5',
                'image_title' => 'Lime',
                'image_description' => '',
                'image' => '/images/frontend/2.jpg',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '6',
                'image_title' => 'Maize',
                'image_description' => '',
                'image' => '/images/frontend/3.jpg',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '7',
                'image_title' => 'Sugar Cane',
                'image_description' => '',
                'image' => '/images/frontend/4.jpg',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);

        // Contact US
        DB::table('contact_us')->insertOrIgnore([
            [
                'id' => '1',
                'locale' => 'en', 
                'page_title' => 'julietgardens',
                'page_keywords' => 'Farming',
                'page_description' => 'default description',
                'header_title' => 'Contact Us',
                'header_description' => 'Keep in Touch',
                'content_header_title' => 'Get in Touch with us',
                'content_header_description' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.',
                'contact_name' => 'Name',
                'contact_email' => 'Email',
                'contact_subject' => 'Subject',
                'contact_message' => 'Message',
                'contact_button' => 'Send',
                'contact_ceo_title' => 'Our Ceo',
                'contact_ceo_description' => 'Donec libero lectus, feugiat vel elit nec, mattis tempor mi ante.',
                'contact_follow' => 'Follow Us On',
                'contact_mail_us' => 'Mail Us',
                'contact_mail_us_details' => 'info@julietgardens.com',
                'contact_address' => 'Address',
                'contact_address_details' => 'My Company 8907 Eswatini.',
                'contact_phone' => 'Phone',
                'contact_phone_details' => '+(32320121) 121 121',
                'contact_map_lat' => '-26.3112326',
                'contact_map_long' => '31.135048',
                'page_image' => '/images/frontend/banner.jpg',
                'ceo_image' => '/images/frontend/16.jpg',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);

        //  INDEX SETTINGS
        DB::table('index')->insertOrIgnore([
            [
                'id' => '1',
                'locale' => 'en', 
                'page_title' => 'Juliet Gardens',
                'page_keywords' => 'Juliet Gardens',
                'page_description' => 'Juliet Gardens',
                'page_image' => '/images/frontend/banner.jpg',
                'header_title' => 'I\'m Planting A Tree To Teach Me To Gather Strength From My Deepest Roots',
                'header_description' => 'Aenean congue vitae mauris sed tristique. Mauris quis nulla at sapien blandit sollicitudin. Nunc tortor lorem, viverra sed diam ut, blandit efficitur leo.',
                'button_one' => 'Contact Us',
                'button_two' => 'Read More',
                'mini_header_one_title' => 'Free Consultation',
                'mini_header_one_description' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.',
                'mini_header_two_title' => 'Certified Products',
                'mini_header_two_description' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.',
                'mini_header_three_title' => 'Free Helpline',
                'mini_header_three_description' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.',
                'section_one_title' => 'Welcome To Our Plantation',
                'section_one_description' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.',
                'section_two_title_one' => 'We Work Hard And Make Our Country Greenery',
                'section_two_description_one' => 'Nullam pretium euismod orci ac porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec at scelerisque dolor, vel placerat mi.',
                'section_two_title_two' => 'Plantation For Future Growth',
                'section_two_description_two' => 'Nullam In Luctus Lectus. Mauris Lobortis Dui Mauris, Non Vestibulum Magna Blandit At Scelerisque Tellus Ipsum Nec Ipsum.',
                'section_two_image_two' => '/images/frontend/5.jpg',
                'section_three_title' => 'Latest News From Gardening',
                'section_three_description' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.',
                'section_four_title' => 'Subscribe To Our Newsletter',
                'section_four_description' => 'Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.',
                'section_four_image' => '/images/frontend/7.jpg',
                'section_four_name' => 'Your Name',
                'section_four_email' => 'Your Email',
                'section_four_button' => 'Subscribe',
                'created_at' => now(), 
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);

        //  INDEX SLIDERS
        DB::table('index_sliders')->insertOrIgnore([
            [
                'id' => '1',
                'slider_image' => '/images/frontend/2.png', 
                'slider_title' => 'Strawberry',
                'created_at' => now(),
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '2',
                'slider_image' => '/images/frontend/3.png', 
                'slider_title' => 'Orange',
                'created_at' => now(),
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '3',
                'slider_image' => '/images/frontend/4.png', 
                'slider_title' => 'Red Stuff',
                'created_at' => now(),
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '4',
                'slider_image' => '/images/frontend/5.png', 
                'slider_title' => 'Lemon',
                'created_at' => now(),
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '5',
                'slider_image' => '/images/frontend/6.png', 
                'slider_title' => 'Passion Fruit',
                'created_at' => now(),
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '6',
                'slider_image' => '/images/frontend/7.png', 
                'slider_title' => 'Apple',
                'created_at' => now(),
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);

        //  INDEX NEWS
        DB::table('index_news')->insertOrIgnore([
            [
                'id' => '1',
                'news_image' => '/images/frontend/3.jpg', 
                'news_image_title' => 'plantation',
                'news_content_title' => 'Design & Planting',
                'news_content' => 'Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et magnis dis parturient montes.',
                'created_at' => now(),
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '2',
                'news_image' => '/images/frontend/4.jpg', 
                'news_image_title' => 'plantation',
                'news_content_title' => 'Quality & Reliability',
                'news_content' => 'Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et magnis dis parturient montes.',
                'created_at' => now(),
                'updated_at' => now(), 
                'deleted_at' => ''
            ],
            [
                'id' => '3',
                'news_image' => '/images/frontend/5.jpg', 
                'news_image_title' => 'plantation',
                'news_content_title' => 'Satisfied Customers',
                'news_content' => 'Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et magnis dis parturient montes.Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et magnis dis parturient montes.Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et magnis dis parturient montes.Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et magnis dis parturient montes.',
                'created_at' => now(),
                'updated_at' => now(), 
                'deleted_at' => ''
            ]
        ]);



    }
}
