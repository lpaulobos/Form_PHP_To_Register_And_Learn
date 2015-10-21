SELECT curso.Nome as "Curso", aluno.ID_Disciplina, disciplinas.Nome, aluno.ID_Disciplina FROM `curso` 
INNER JOIN aluno ON (curso.ID = aluno.ID_Curso) 
INNER JOIN disciplinas ON (aluno.ID_Disciplina = 
disciplinas.ID) ORDER BY `curso`.`Nome` ASC ;

