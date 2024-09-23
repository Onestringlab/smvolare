select * from  tb_jadwaliklan  where tanggal <= '2021-12-31'

INSERT INTO tb_jadwaliklan_okt2021
SELECT * FROM tb_jadwaliklan
where tanggal <= '2015-12-31'

SELECT * FROM tb_jadwaliklan
where tanggal between '2016-01-01' and '2016-12-31'

INSERT INTO tb_jadwaliklan_okt2021
SELECT * FROM tb_jadwaliklan
where tanggal between '2016-01-01' and '2016-12-31'