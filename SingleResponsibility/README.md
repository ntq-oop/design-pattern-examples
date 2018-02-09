# Single responsibility principle

## Requirement:
- Teacher create groups
- Student requests enroll to groups => send email to teacher for approving
- Teacher review and approved or rejected => send email to student

## Design
1. StudentService class
+ enroll() 

2. EmailSender class
+ send()

3. EmailValidator class
+ validate()

## Refs
https://codeburst.io/understanding-solid-principles-single-responsibility-b7c7ec0bf80
https://code.tutsplus.com/tutorials/solid-part-1-the-single-responsibility-principle--net-36074