CREATE TABLE #__fotoalbum_fotos (
foto_id INT NOT NULL,
foto_filename VARCHAR( 100 ) NOT NULL,
foto_uploader INT NOT NULL,
foto_uploaddate DATETIME NOT NULL,
foto_description TEXT NOT NULL,
PRIMARY KEY ( foto_id )
) ENGINE = MYISAM DEFAULT CHARSET=UTF8;