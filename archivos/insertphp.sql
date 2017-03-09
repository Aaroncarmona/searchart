
INSERT INTO autor(au_ID, au_NOM, au_APODO, au_APPAT, au_APMAT, au_FOTO, au_DES) 
VALUES ('value1','value2','value3','value4','value5','value6','value7');


INSERT INTO exhibicion(ex_ID, sal_ID, tex_ID, ex_NOM, ex_DES, ex_FI, ex_FN, ex_ST) 
VALUES ('value1','value2','value3','value4','value5','value6','value7','value8');

INSERT INTO museo(mus_ID, del_ID, st_ID, mus_NOM, mus_MAP, mus_FOTO, mus_TEL, mus_CYN, mus_DES, mus_CP, mus_HORI, mus_HORF, mus_COS, mus_ST) 
VALUES ('value1','value2','value3','value4','value5','value6','value7','value8','value9','value10','value11','value12','value13','value14')

INSERT INTO pintura(pin_ID, au_ID, ex_ID, pin_NOM, pin_FOTO, pin_ANCHO, pin_ALTO) 
VALUES ('value1','value2','value3','value4','value5','value6','value7')

INSERT INTO piso(pis_ID, mus_ID, pis_NOM, pis_FOTO) VALUES ('value1','value2','value3','value4')

INSERT INTO sala(sal_ID, pis_ID, sal_NOM, sal_FOTO, sal_ST) VALUES ('value-1','value-2','value-3','value-4','value-5')

SELECT * FROM bitacora;