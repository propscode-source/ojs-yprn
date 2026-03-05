; <?php exit; // DO NOT DELETE?>
; DO NOT DELETE THE ABOVE LINE!!!

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
; OJS Production Configuration
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

[general]

app_key = base64:ChangeThisToRandomSecureKey123456

installed = Off

base_url = "https://ojs.rimbanusantara.or.id"

strict = Off

session_cookie_name = OJSSID

session_lifetime = 30

session_samesite = Lax

time_zone = "Asia/Jakarta"

date_format_short = "Y-m-d"
date_format_long = "F j, Y"
datetime_format_short = "Y-m-d H:i"
datetime_format_long = "F j, Y - H:i"

allow_url_fopen = On

restful_urls = On

allowed_hosts = '["ojs.rimbanusantara.or.id"]'

trust_x_forwarded_for = On

show_upgrade_warning = On

enable_minified = On

enable_beacon = Off

sandbox = Off


;;;;;;;;;;;;;;;;;;;;;
; Database Settings ;
;;;;;;;;;;;;;;;;;;;;;

[database]

driver = postgres
host = postgresql-database-yprn
username = ojsadmin
password = @2026-R1mb4@
name = ojsyprn
port = 5432

debug = Off

upload_max_filesize = 100M
post_max_size = 100M

;;;;;;;;;;;;;;;;;;
; Cache Settings ;
;;;;;;;;;;;;;;;;;;

[cache]

default = file
path = cache/opcache

web_cache = On
web_cache_hours = 2

[cache]
object_cache = redis

[redis]
host = redis
port = 6379

;;;;;;;;;;;;;;;;;;;;;;;;;
; Localization Settings ;
;;;;;;;;;;;;;;;;;;;;;;;;;

[i18n]

locale = en_US
connection_charset = utf8


;;;;;;;;;;;;;;;;;
; File Settings ;
;;;;;;;;;;;;;;;;;

[files]

files_dir = /var/www/html/files

public_files_dir = public

public_user_dir_size = 5000

umask = 0022


;;;;;;;;;;;;;;;;;;;;;;;;;;;;
; Fileinfo (MIME) Settings ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;

[finfo]

mime_database_path = /etc/magic.mime


;;;;;;;;;;;;;;;;;;;;;
; Security Settings ;
;;;;;;;;;;;;;;;;;;;;;

[security]

cipher = aes-256-cbc

force_ssl = On

force_login_ssl = Off

session_check_ip = Off

encryption = sha1

salt = "ChangeThisRandomSecretSalt12345"

api_key_secret = "AnotherRandomSecretKey"

reset_seconds = 7200

allowed_html = "a[href|target|title],em,strong,cite,code,ul,ol,li[class],dl,dt,dd,b,i,u,img[src|alt],sup,sub,br,p"

allowed_title_html = "b,i,u,sup,sub"


;;;;;;;;;;;;;;;;;;
; Email Settings ;
;;;;;;;;;;;;;;;;;;

[email]

default = smtp

smtp = On
smtp_server = smtp.gmail.com
smtp_port = 587
smtp_auth = tls
smtp_username = your_email@gmail.com
smtp_password = your_app_password

require_validation = Off

validation_timeout = 14


;;;;;;;;;;;;;;;;;;;
; Search Settings ;
;;;;;;;;;;;;;;;;;;;

[search]

min_word_length = 3

results_per_keyword = 500


;;;;;;;;;;;;;;;;
; OAI Settings ;
;;;;;;;;;;;;;;;;

[oai]

oai = On

repository_id = ojs.rimbanusantara.or.id

oai_max_records = 100


;;;;;;;;;;;;;;;;;;;;;;
; Interface Settings ;
;;;;;;;;;;;;;;;;;;;;;;

[interface]

items_per_page = 25

page_links = 10


;;;;;;;;;;;;;;;;;;;;
; Captcha Settings ;
;;;;;;;;;;;;;;;;;;;;

[captcha]

recaptcha = off

captcha_on_register = on
captcha_on_login = on


;;;;;;;;;;;;;;;;;;;;;
; External Commands ;
;;;;;;;;;;;;;;;;;;;;;

[cli]

tar = /bin/tar

xslt_command = ""


;;;;;;;;;;;;;;;;;;
; Proxy Settings ;
;;;;;;;;;;;;;;;;;;

[proxy]

; empty


;;;;;;;;;;;;;;;;;;
; Debug Settings ;
;;;;;;;;;;;;;;;;;;

[debug]

show_stacktrace = Off

display_errors = Off

deprecation_warnings = Off

log_web_service_info = Off


;;;;;;;;;;;;;;;;;;;;;;;
; Job Queues Settings ;
;;;;;;;;;;;;;;;;;;;;;;;

[queues]

default_connection = "database"

default_queue = "queue"

job_runner = Off


;;;;;;;;;;;;;;;;;;;;;;;;;;;
; Scheduled Task Settings ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;

[schedule]

task_runner = Off

scheduled_tasks_report_error_only = On


;;;;;;;;;;;;;;;;;;;;;;;;;
; Invitations Settings  ;
;;;;;;;;;;;;;;;;;;;;;;;;;

[invitations]

expiration_days = 3
