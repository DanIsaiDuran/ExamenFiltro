# Relaciones
---

Para realizar la relacion entre las tablas materias y estudiantes se creo una tabla pivote en la que se guardan los id de cada tabla como llaves foraneas, de esta forma podemos acceder a la relacion y asignar varias materias a un alumno y varios alumnos a una materia y tambien recuperar los datos de esta relacion y mostrar cuantos estudiantes pertenecen a una materia o cuantas materias esta cursando un estudiante.

El metodo que se utiliza para asignar valores a la tabla pivote es el metodo attach(), este nos pide como parametro el id de la tabla a la cual se le quiere asignar la relacion.

Para eliminar una relacion se usa el metodo contrario denominado como dettach() que nos pide el mismo parametro que la anterior.