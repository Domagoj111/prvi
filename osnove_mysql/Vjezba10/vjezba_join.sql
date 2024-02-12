SELECT 
a.address
, a.district
, a.phone
, c.city
-- , c.country_id
, country.country
-- , s.manager_staff_id
, CONCAT(st.first_name," ",st.last_name) AS Manager
,st.address_id
,a_mgr.*
FROM store s
INNER JOIN address a ON s.address_id=a.address_id
LEFT JOIN city c ON c.city_id=a.city_id
LEFT JOIN country ON country.country_id=c.country_id
LEFT JOIN staff st ON s.manager_staff_id=st.staff_id
LEFT JOIN address a_mgr ON st.address_id=a_mgr.address_id;