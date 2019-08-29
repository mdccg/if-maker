CREATE TABLE "usuarios" (
  "id" int PRIMARY KEY,
  "nome" varchar,
  "email" varchar,
  "cpf" varchar,
  "rg" varchar,
  "oe" varchar,
  "data_nascimento" date,
  "cidade" varchar,
  "estado" varchar
);

CREATE TABLE "discentes" (
  "ra" varchar PRIMARY KEY,
  "usuario_id" int REFERENCES "usuarios"("id")
);

CREATE TABLE "docentes" (
  "suap" varchar PRIMARY KEY,
  "usuario_id" int REFERENCES "usuarios"("id")
);

CREATE TABLE "cursos" (
  "id" int PRIMARY KEY,
  "titulo" varchar,
  "turno" varchar,
  "horario" time,
  "docente_suap" varchar REFERENCES "docente"("suap")
);

CREATE TABLE "usuarios_cursos" (
  "usuario_id" int REFERENCES "usuarios"("id"),
  "curso_id" int REFERENCES "cursos"("id"),
  PRIMARY KEY("usuario_id", "curso_id")
);
