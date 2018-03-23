# Liskov substitution principle

## Requirement:
- There are 3 kinds of student: PrimaryStudent, HighSchoolStudent, UniversityStudent
- PrimaryStudent can NOT apply for a scholarship
- HighSchoolStudent, UniversityStudent can apply for a scholarship

## Wrong Design
![picture](./Images/LiskovSubstitutionPrinciple%20-%20Wrong.png)

1. Student class => base class
+ joinCourse(): boolean
+ getName(): string
+ apply(): string

2. PrimaryStudent class => extends Student Class
+ apply(): throw new Exception('Primary Student can NOT appy for a scholarship')

3. HighSchoolStudent => extends Student Class

4. UniversityStudent => extends Student Class

5. Student Controller
+ actionApply(Student $student): boolean
+ actionJoinCourse(Student $student): boolean

## Correct Design
![picture](./Images/LiskovSubstitutionPrinciple%20-%20Correct.png)

1. Student class => base class
+ joinCourse(): boolean
+ getName(): string

2. ApplyableInterface
+ apply(): string

3. PrimaryStudent class => extends Student Class 

4. HighSchoolStudent => extends Student Class + IMPLEMENTS ApplyableInterface

5. UniversityStudent => extends Student Class + IMPLEMENTS ApplyableInterface

6. Student Controller
+ actionApply(Student $student): string
+ actionJoinCourse(Student $student): boolean

## Refs
File UML: https://drive.google.com/file/d/1tnlv4BC9pzAkKy7OYn1UjCLZ7BVLuuEt/view
