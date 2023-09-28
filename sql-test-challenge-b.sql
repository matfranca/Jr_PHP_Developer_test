c. SQL Query with JOIN (persons and children):
Suppose you have two tables: "persons" and "children," where "persons" contains
information about adults, and "children" contains information about their children. Write
an SQL query that retrieves the first and last names of adults from the "persons" table
along with the names of their children from the "children" table. Use a JOIN operation to
combine the two tables.

SELECT P.FIRST_NAME, P.LAST_NAME, C.FIRST_NAME AS CHILDREN_NAME * FROM PERSONS AS P
JOIN CHILDREN AS C ON C.