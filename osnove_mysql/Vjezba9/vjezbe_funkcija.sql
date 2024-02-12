SELECT *
,SUM(amount) AS total
,SUM(amount)/LEAD(SUM(amount), -1) OVER (ORDER BY DATE_FORMAT(payment_date, '%Y%m%d')) AS `razlika_jucer`
FROM payment
GROUP BY DATE_FORMAT(payment_date, '%Y%m%d'); 


-- matematicke
SELECT *
, MOD(rental_id,360) AS kut
, COS(RADIANS(60)) AS kosinuskuta
, COS(RADIANS(MOD(rental_id,360))) konacniKosinusRentalaId
, FLOOR(7 + (RAND() * 6)) AS randomni7_12
, LOG10(100) AS dvica
, LN(2.718) AS ln_od_necega
, LOG(2.718) AS log_od_necega
FROM payment
ORDER BY randomni7_12 DESC;

-- tekstualne f-cija
SELECT *
, LOWER(title) AS naslov
, LEFT(title,1) AS prvoslovo
, SUBSTRING(title FROM 2) AS ostalaslova
, CONCAT(
LEFT(title,1)
,LOWER(SUBSTRING(title FROM 2))) AS naslovMalimSlovima
FROM film;


-- Agregatne f-cije
SELECT *
, min(amount) AS najmanjiIznosPlacanja
, max(amount) AS najveciiIznosPlacanja
, SUM(amount) AS total
, AVG(amount) AS prosjek
, COUNT(amount) AS brojPlacanja
FROM payment
GROUP BY customer_id
ORDER BY najveciiIznosPlacanja DESC, total DESC;