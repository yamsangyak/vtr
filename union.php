select * from (
							select (select id from document_file where doc_type = 0 and document_id =1 order by id desc limit 0,1)  id
							union
							select (select id from document_file where doc_type = 1 and document_id =1  order by id desc limit 0,1)  t2
							union
							select (select id from document_file where doc_type = 2  and document_id =1 order by id desc limit 0,1)  t3
							union
							select (select id from document_file where doc_type = 3  and document_id =1 order by id desc limit 0,1)  t4
							union
							select (select id from document_file where doc_type = 4  and document_id =1 order by id desc limit 0,1)  t5
							) t where id is not null
							
							
							
							
							
							
							
							
							
							
							
							
							SELECT * 
FROM (

SELECT (

SELECT id
FROM document_file
WHERE doc_type =0
AND document_id =1
ORDER BY id DESC 
LIMIT 0 , 1
)id
UNION 
SELECT (

SELECT id
FROM document_file
WHERE doc_type =1
AND document_id =1
ORDER BY id DESC 
LIMIT 0 , 1
)t2
UNION 
SELECT (

SELECT id
FROM document_file
WHERE doc_type =2
AND document_id =1
ORDER BY id DESC 
LIMIT 0 , 1
)t3
UNION 
SELECT (

SELECT id
FROM document_file
WHERE doc_type =3
AND document_id =1
ORDER BY id DESC 
LIMIT 0 , 1
)t4
UNION 
SELECT (

SELECT id
FROM document_file
WHERE doc_type =4
AND document_id =1
ORDER BY id DESC 
LIMIT 0 , 1
)t5
)t
WHERE id IS NOT NULL