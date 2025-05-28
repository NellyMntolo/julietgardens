<?php

use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lang')->insertOrIgnore([
            [
            	'id' => '1', 'locale' => 'ab', 'name' => 'Abkhazian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '2', 'locale' => 'aa', 'name' => 'Afar', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '3', 'locale' => 'af', 'name' => 'Afrikaans', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '4', 'locale' => 'sq', 'name' => 'Albanian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '5', 'locale' => 'am', 'name' => 'Amharic', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '6', 'locale' => 'ar', 'name' => 'العربية', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '7', 'locale' => 'an', 'name' => 'Aragonese', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '8', 'locale' => 'hy', 'name' => 'Armenian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '9', 'locale' => 'as', 'name' => 'Assamese', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '10', 'locale' => 'ay', 'name' => 'Aymara', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '11', 'locale' => 'az', 'name' => 'Azerbaijani', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '12', 'locale' => 'ba', 'name' => 'Bashkir', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '13', 'locale' => 'eu', 'name' => 'Basque', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '14', 'locale' => 'bn', 'name' => 'Bengali', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '15', 'locale' => 'dz', 'name' => 'Bhutani', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '16', 'locale' => 'bh', 'name' => 'Bihari', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '17', 'locale' => 'bi', 'name' => 'Bislama', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '18', 'locale' => 'br', 'name' => 'Breton', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '19', 'locale' => 'bg', 'name' => 'Bulgarian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '20', 'locale' => 'my', 'name' => 'Burmese', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '21', 'locale' => 'be', 'name' => 'Byelorussian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '22', 'locale' => 'km', 'name' => 'Cambodian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '23', 'locale' => 'ca', 'name' => 'Catalan', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '24', 'locale' => 'ch', 'name' => '簡體中文', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '25', 'locale' => 'zh', 'name' => '繁體中文', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '26', 'locale' => 'co', 'name' => 'Corsican', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '27', 'locale' => 'hr', 'name' => 'Croatian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '28', 'locale' => 'cs', 'name' => 'Czech', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '29', 'locale' => 'da', 'name' => 'Danish', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '30', 'locale' => 'dv', 'name' => 'Divehi', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '31', 'locale' => 'nl', 'name' => 'Dutch', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '32', 'locale' => 'en', 'name' => 'English', 'status' => 'no', 'default_lang' => 'en', 'active_lang' => 'yes', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '33', 'locale' => 'eo', 'name' => 'Esperanto', 'status' => 'no', 'default_lang' => '', 'active_lang' => 'yes', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '34', 'locale' => 'et', 'name' => 'Estonian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '35', 'locale' => 'fo', 'name' => 'Faeroese', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '36', 'locale' => 'fa', 'name' => 'Farsi', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '37', 'locale' => 'fj', 'name' => 'Fiji', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '38', 'locale' => 'fi', 'name' => 'Finnish', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '39', 'locale' => 'fr', 'name' => 'French', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '40', 'locale' => 'fy', 'name' => 'Frisian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '41', 'locale' => 'gl', 'name' => 'Galician', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '42', 'locale' => 'gd', 'name' => 'Gaelic (Scottish)', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '43', 'locale' => 'gv', 'name' => 'Gaelic (Manx)', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '44', 'locale' => 'ka', 'name' => 'Georgian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '45', 'locale' => 'de', 'name' => 'German', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '46', 'locale' => 'el', 'name' => 'Greek', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '47', 'locale' => 'kl', 'name' => 'Greenlandic', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '48', 'locale' => 'gn', 'name' => 'Guarani', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '49', 'locale' => 'gu', 'name' => 'Gujarati', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '50', 'locale' => 'ht', 'name' => 'Haitian Creole', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '51', 'locale' => 'ha', 'name' => 'Hausa', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '52', 'locale' => 'he', 'name' => 'Hebrew', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '53', 'locale' => 'hi', 'name' => 'Hindi', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '54', 'locale' => 'hu', 'name' => 'Hungarian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '55', 'locale' => 'is', 'name' => 'Icelandic', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '56', 'locale' => 'io', 'name' => 'Ido', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '57', 'locale' => 'id', 'name' => 'Indonesian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '58', 'locale' => 'ga', 'name' => 'Irish', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '59', 'locale' => 'it', 'name' => 'Italian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '60', 'locale' => 'ja', 'name' => 'Japanese', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '61', 'locale' => 'ko', 'name' => 'Korean', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '62', 'locale' => 'ku', 'name' => 'Kurdish', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '63', 'locale' => 'mk', 'name' => 'Macedonian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '64', 'locale' => 'no', 'name' => 'Norwegian', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ],
            [
            	'id' => '65', 'locale' => 'tl', 'name' => 'Tagalog', 'status' => 'no', 'default_lang' => '', 'active_lang' => '', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => ''
            ]
        ]);
    }
}
