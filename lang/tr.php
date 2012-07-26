<?php
/**
 * BigBrotherBot Config File Generator
 * Author: Freelander
 * Author URI: http://www.fps-gamer.net
 *
 * Copyright(c)2010  Freelander  <mailto:freelander@fps-gamer.net>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as 
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 *---------------------------------------------------------------------------------
 *
 * LANGUAGE TRANSLATION FILE
 * Author Name: Freelander
 * Author E-mail: freelander@fps-gamer.net
 * Author URI: http://www.fps-gamer.net
 * Last Modified: 06.04.2011
 *
 */ 


/**********************************************************************************
 * HEADER
 **********************************************************************************/
$LANG['TITLE'] = "BigBrotherBot Config Dosyası Düzenleyici";
$LANG['SLOGAN'] = "B3 Versiyon $b3_version veya Üzeri";


/**********************************************************************************
 * GENERAL SETTINGS
 **********************************************************************************/
$LANG['GENERAL_SETTINGS'] = "Genel Ayarlar:";
$LANG['GENERAL_SETTINGS_TIP'] = "Genel bilgilerinizi girin";
$LANG['GAME'] = "Oyun:";
$LANG['GAME_TIP'] = "Oyunu seçin";
$LANG['BOT_NAME'] = "Bot Adı:";
$LANG['BOT_NAME_TIP'] = "İsterseniz farklı bir bot ismi belirleyebilir veya olduğu gibi bırakabilirsiniz.";
$LANG['BOT_PREFIX'] = "Bot Ön Eki:";
$LANG['BOT_PREFIX_TIP'] = "Oyun içi mesajların önüne bu kod getirilecektir. Renk kodları kullanabilirsiniz. 
                           ^1:Kırmızı,
                           ^2:Yeşil, 
                           ^3:Sarı, 
                           ^4:Mavi, 
                           ^5:Cam Göbeği, 
                           ^6:Pembe, 
                           ^7:Beyaz, 
                           ^0:Siyah";
$LANG['TIME_FORMAT'] = "Zaman Biçimi:";
$LANG['TIME_FORMAT_TIP'] = "Zaman biçimini python zaman yönergelerinde belirtildiği şekilde düzenleyebilirsiniz.";
$LANG['TIME_ZONE'] = "Saat Dilimi:";
$LANG['TIME_ZONE_TIP'] = "Sunucunuzun içinde bulunduğu saat dilimini ayarlayın.";
$LANG['B3_LOG'] = "B3 Log Dosyası:";
$LANG['B3_LOG_TIP'] = "B3 log dosyasının tutulacağı yeri ayarlayın.";
$LANG['LOG_LEVEL'] = "Log Düzeyi:";
$LANG['LOG_LEVEL_TIP'] = "Log dosyasında görmek istediğiniz detay düzeyini belirleyin. Daha düşük raka daha fazla detay kaydeder.";


/**********************************************************************************
 * DATABASE SETTINGS
 **********************************************************************************/
$LANG['DB_SETTINGS'] = "Veritabanı Ayarları:";
$LANG['DB_SETTINGS_TIP'] = "Veritabanı bağlantı bilgilerinizi girin";
$LANG['USERNAME'] = "Kullanıcı Adı:";
$LANG['USERNAME_TIP'] = "B3 veritabanı için kullanıcı adınızı girin.";
$LANG['PASSWORD'] = "Parola:";
$LANG['PASSWORD_TIP'] = "B3 veritabanı için parolanızı girin..";
$LANG['HOSTNAME'] = "Hostname/IP:";
$LANG['HOSTNAME_TIP'] = "Ana bilgisayar adını (hostname) veya eğer veritabanı uzak bir konumda ise IP adresini girin. 
                         Lütfen veritabanı sunucusunun uzak bağlantıları kabul ettiğinden emin olun. Bu yaygın bir hatadır.";
$LANG['DB_NAME'] = "Veritabanı Adı:";
$LANG['DB_NAME_TIP'] = "B3 veritabanı ismini girin.";


/**********************************************************************************
 * BFBC2/BF3/MOH SPECIFIC SETTINGS
 **********************************************************************************/
$LANG['BFBC2_MOH'] = "BFBC2/MOH Ayarları:";
$LANG['BFBC2_MOH_TIP'] = "BFBC2/MOH ile ilgili ayarlamaları yapın";
$LANG['MAX_SAY_LINE'] = "Konuşma satırındaki maksimum karakter sayısı:";
$LANG['MAX_SAY_LINE_TIP'] = "Oyun içi konuşma satırlarında izin vermek istediğiniz karakter sayısı. (maksimum uzunluk 100 karakterdir).";
$LANG['BF3'] = "BF3 Specific Settings";
$LANG['BF3_TIP'] = "Configure BF3 specific settings";
$LANG['MESSAGE_DELAY'] = "Message Delay:";
$LANG['MESSAGE_DELAY_TIP'] = "The delay (in second) to wait between two messages";
$LANG['BIG_B3_PRIVATE_RESPONSES'] = "Big B3 Private Responses:";
$LANG['BIG_B3_PRIVATE_RESPONSES_TIP'] = "if on, then all private message sent by B3 will be displayed as a big message on screen";
$LANG['BIG_MSG_DURATION'] = "Big Message Duration"; 
$LANG['BIG_MSG_DURATION_TIP'] = "For how many seconds big messages are displayed?";

/**********************************************************************************
 * GAME SERVER SETTINGS
 **********************************************************************************/
$LANG['GAME_SERVER_SETTINGS'] = "Oyun Sunucusu Ayarları:";
$LANG['GAME_SERVER_SETTINGS_TIP'] = "Oyun sunucusu ayarlarını girin";
$LANG['RCONPASS'] = "Rcon Parolası:";
$LANG['RCONPASS_TIP'] = "Rcon parolanızı girin.";
$LANG['SERVER_PORT'] = "Sunucu Portu:";
$LANG['SERVER_PORT_TIP'] = "Oyun sunucunuzun port numarasını girin.";
$LANG['PUBLIC_IP'] = "Public IP:";
$LANG['PUBLIC_IP_TIP'] = "Oyun sunucunuzun Public IP numarasını girin.";
$LANG['RCON_IP'] = "Rcon IP:";
$LANG['RCON_IP_TIP'] = "Oyun sunucunuzun Rcon IP numarasını girin.";
$LANG['RCON_PORT'] = "Rcon Port:";
$LANG['RCON_PORT_TIP'] = "Oyun sunucunuzun rcon port numarasını girin.";
$LANG['TIMEOUT'] = "Zaman Aşımı:";
$LANG['TIMEOUT_TIP'] = "Zaman Aşımı (Timeout)süresi.";
$LANG['PUNKBUSTER'] = "Punkbuster:";
$LANG['PUNKBUSTER_TIP'] = "Eğer Punkbuster etkinse 'on', değilse 'off' olarak seçiniz.";
$LANG['GAME_LOG'] = "Oyun Kütük Dosyası:";
$LANG['GAME_LOG_TIP'] = "Oyun kütük (log) dosyasının tutulduğu dosya yolunu girin.";
$LANG['GAME_LOG_URL'] = "Oyun Kütük Dosyası URL:";
$LANG['GAME_LOG_URL_TIP'] = "Oyun kütük dosyası için belirlenen URL' yi girin.";
$LANG['LOCAL_PATH'] = "Yerel Yol:";
$LANG['LOCAL_PATH_TIP'] = "Oyun kütük dosyası için tam dosya yolunu girin.";
$LANG['FTP_ADDRESS'] = "FTP Adresi:";
$LANG['FTP_ADDRESS_TIP'] = "Oyun kütük dosyası için FTP adresini girin. (Baslında 'ftp://' ile birlikte)";
$LANG['FTP_USER'] = "FTP Kullanıcı:";
$LANG['FTP_USER_TIP'] = "FTP kullanıcı adınızı girin";
$LANG['FTP_PASSWORD'] = "FTP Parolası:";
$LANG['FTP_PASSWORD_TIP'] = "FTP parolanızı girin.";


/**********************************************************************************
 * AUTODOC SETTINGS
 **********************************************************************************/
$LANG['AUTODOC_SETTINGS'] = "Autodoc Ayarları:";
$LANG['AUTODOC_SETTINGS_TIP'] = "Autodoc tüm B3 komutları için bir kullanıcı dokümanı oluşturacaktır.";
$LANG['TYPE'] = "Tip:";
$LANG['TYPE_TIP'] = "Kullanmak istediğinizi autodoc dosya tipini seçin.";
$LANG['MAX_LEVEL'] = "Maksimum Düzey:";
$LANG['MAX_LEVEL_TIP'] = "Eğer daha yüksek kullanıcı düzeyleri için komutları gizlemek isterseniz bu alana daha düşük bir rakam girin.";
$LANG['DESTINATION'] = "Hedef:";
$LANG['DESTINATION_TIP'] = "Komut dokümantasyon dosyasını oluşturmak istediğiniz konumu girin.";
$LANG['LOCAL_PATH_TIP2'] = "Tam dosya yolunu ve dosya adını girin.";
$LANG['FTP_ADDRESS_TIP2'] = "B3 komut dokümantasyon dosyasını oluşturmak istediğiniz FTP adresini girin.";


/**********************************************************************************
 * MESSAGE SETTINGS
 **********************************************************************************/
$LANG['MESSAGES'] = "Mesajlar:";
$LANG['MESSAGES_TIP'] = "Farlı olaylar için gösterilecek B3 oyun içi mesajları.";
$LANG['KICKED_BY'] = "Dışarı Atan:";
$LANG['KICKED_BY_TIP'] = "Bir oyuncunun yönetici tarafından dışarı atıldığında gösterilecek mesajı girin.";
$LANG['KICKED'] = "Dışarı Atıldı:";
$LANG['KICKED_TIP'] = "Bir oyuncunun B3 tarafından dışarı atıldığında gösterilecek mesajı girin.";
$LANG['BANNED_BY'] = "Yasaklayan:";
$LANG['BANNED_BY_TIP'] = "Bir oyuncunun yönetici tarafından yasaklandığında gösterilecek mesajı girin.";
$LANG['BANNED'] = "Yasaklandı:";
$LANG['BANNED_TIP'] = "Bir oyuncunun B3 tarafından yasaklandığında gösterilecek mesajı girin.";
$LANG['TEMPBANNED_BY'] = "Geçici Olarak Yasaklayan:";
$LANG['TEMPBANNED_BY_TIP'] = "Bir oyuncunun yönetici tarafından geçici olarak yasaklandığında gösterilecek mesajı girin.";
$LANG['TEMPBANNED'] = "Geçici Olarak Yasaklandı:";
$LANG['TEMPBANNED_TIP'] = "Bir oyuncunun B3 tarafından geçici olarak yasaklandığında gösterilecek mesajı girin.";
$LANG['UNBANNED_BY'] = "Yasağı Kaldıran:";
$LANG['UNBANNED_BY_TIP'] = "Bir oyuncunun yönetici tarafından yasağının kaldırıldığında gösterilecek mesajı girin.";
$LANG['UNBANNED'] = "Yasak Kaldırıldı:";
$LANG['UNBANNED_TIP'] = "Bir oyuncunun B3 tarafından yasağının kaldırıldığında gösterilecek mesajı girin.";


/**********************************************************************************
 * EXTERNAL PLUGINS
 **********************************************************************************/
$LANG['EXTERNAL_PLUGINS'] = "Harici Eklentiler:";
$LANG['EXTERNAL_PLUGINS_TIP'] = "Harici eklentilerinizin ayar dosyalarının bulundupu klasör yolunu girin.";
$LANG['B3_FOLDER_TIP'] = "@b3 : B3 dosyalarının yüklü olduğu klasör.";
$LANG['EXTERNAL_DIR'] = "Harici Dizin:";
$LANG['EXTERNAL_DIR_TIP'] = "Harici eklentilerinizin ayar dosyalarının bulundupu klasör yolunu girin.";


/**********************************************************************************
 * BUILT-IN PLUGINS
 **********************************************************************************/
$LANG['BUILTIN_PLUGINS'] = "Dahili Eklentiler:";
$LANG['BUILTIN_PLUGINS_TIP'] = "Kullanmak istediğiniz dahili eklentileri seçin ve dosya yollarını girin.";
$LANG['CONF_FOLDER_TIP'] = "@conf : dahili eklentilerin ayar dosyalarının bulunduğu klasör.";
$LANG['ENABLE_DISABLE_TIP'] = "Bu eklentiyi etkinleştirmek veya devre dışı bırakmak için tıklayın.";
$LANG['ENTER_PATH'] = "Eklenti ayar dosyası yolunu girin.";
$LANG['CANNOT_DISABLE_TIP'] = "Bu eklentiyi devre dışı bırakamazsınız.";
$LANG['XLRSTATS_TIP'] = "Bu eklentiyi etkinleştirmek veya devre dışı bırakmak için tıklayın. :
                         Bu eklenti sistem kaynaklarınızı ciddi oranda kullanabilir. Lütfen
                         bu eklentiyi etkinleştirmeden önce B3 forumlarını inceleyerek daha
                         fazla bilgi edininiz.  İlave veri tabanı dosyaları gereklidir.
                        ";

/**********************************************************************************
 * MISC
 **********************************************************************************/
$LANG['SELECT_YOUR_GAME'] = "Oyun Seçin";
$LANG['SELECT_LOG_LEVEL'] = "Kütük Dosyası Düzeyini Seçin";
$LANG['SELECT_PB_STATUS'] = "PB Durumunu Seçin";
$LANG['SELECT_LOCATION'] = "Konum Seçin";
$LANG['SAVE_BUTTON'] = "Kaydet";
$LANG['SAVE_BUTTON_TIP'] = "Ayar Dosyasını Kaydet";
$LANG['RESET_BUTTON'] = "Sil";
$LANG['RESET_BUTTON_TIP'] = "Tüm Ayarları Sil";
$LANG['PRIVACY_STATEMENT'] = "Gizlilik Bildirimi";
$LANG['OUR_PRIVACY_STATEMENT'] = "Gizlilik Bildirimi";
$LANG['CLOSE'] = "Kapat";
$LANG['PRESS_ESC'] = " (veya ESC veya kutucuğun dışına tıklayın)";
$LANG['SELECT_OPTION'] = "Please Select";
?>