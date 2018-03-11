<?php

/**
 * Class StudentController
 */
class StudentController {
    /**
     * @param Student $student
     *
     * @return bool
     */
    public function actionJoinCourse(Student $student): bool {
        return $student->joinCourse();
    }

    /**
     * @param Student $student
     *
     * @return string
     */
    public function actionApply(Student $student): string {
        if (!$student instanceof ApplyableInterface) {
            return false;
        }

        return $student->getName() . $student->apply();
    }
}
