`#php` `#oop` `#master-in-software-engineering`

# Assembler School: OOP Basics with PHP <!-- omit in toc -->

In this project you will learn the basics of OOP using mobile devices as a reference. In the _"Project files"_ section you will find a description of the content to be displayed in each file.

# OOP Basics

In the paradigm of object-oriented programming, there are many mechanisms that allow us to carry out the design of our software to be solid and scalable. Classes, Properties, Herency, Interface Polymorphism, Constructor and Destructors. Let’s take a look at all of this.

## Main objectives in this project

- Improve your knowledge in object-oriented programming.
- Understand Herency
- Understand how to use Abstraction
- Understand what is Polymorphism
- Understand what interfaces are and what they are used for.

## Basic concepts

### **What is object-oriented programming in general terms?**

Object Oriented programming (OOP) is a programming paradigm that relies on the concept of classes and objects. It is used to structure a software program into simple, reusable pieces of code blueprints (usually called classes), which are used to create individual instances of objects.

### **What is a class?**

Classes are user-defined data types that act as the blueprint for individual objects, attributes and methods.

### **What is an object?**

Objects are instances of a class created with specifically defined data. Objects can correspond to real-world objects or an abstract entity.

### **What is an instance?**

An instance is the creation of an object based on its blueprint which is the class.

### **What is a property?**

Properties or attributes are the values defined inside a class that represent the state of an object.

### **What is a method?**

Methods are the functions defined inside a class that describe the behaviors of an object.

### **What is the difference between a function and a method?**

A method is a function that is associated with an object.

- Methods are implicitly passed the object on which it was called without specifying them in the parameters, so that all properties and methods are accessible from inside.

- Normal functions would need to be specified that an object will be passed by parameter, in order to operate with public properties and methods, which are to that can be accessed outside the class.

### **What is a constructor?**

A constructor is a method that is executed when an object is instantiated (created).

### **What do we understand about the concept of encapsulation?**

Encapsulation is the principle by which properties and methods of a class can only be accessed within its scope, through its own methods. Encapsulation hides part of its implementation for itself.

There are 3 levels of encapsulation for properties and methods:

- Public, that allows the access from outside the class where have been declared.
- Private, which only allows the access from inside the class where have been declared.
- Protected, which allows the access from inside the class and from child classes.

### **What do we understand about the concept of abstraction?**

Abstraction is the principle by which only the required or essential characteristics of an object are implemented. Abstraction hides or ignores details that are not essential for the functionality of the object.

### **What do we understand about the concept of inheritance?**

Inheritance is the ability to create new classes that extends from existing ones, and inherits its public and protected properties and methods. These properties and methods are accessible from the parent class unless those were overriden in the child class.

### **What do we understand about the concept of polymorphism?**

Polymorphism is the ability of using multiple classes that are interchangeable, which implements same properties or methods. This ability is achieved with the use of interfaces in multiple classes, or the use of inheritance from an exsiting class to multple classes.

### **What do we understand about the concept of Overload?**

Overload consists on declare the same function name multiple times, but using a different set of parameters.

### **What do we understand about the concept of Override?**

Override consists on redeclare a method in a child class that was inherited from the parent class.

### **What is a static class?**

A static class is similar to a class that is both abstract and sealed. The difference between a static class and a non-static class is that a static class cannot be instantiated or inherited and that all of the members of the class are static in nature. To declare a class as static, you should mark it with the static keyword in the class declaration.

### **Look for advantages over object-oriented programming compared to other programming paradigms**

- Modularity: Encapsulation enables objects to be self-contained, making troubleshooting and collaborative development easier.
- Reusability: Code can be reused through inheritance, meaning a team does not have to write the same code multiple times.
- Productivity: Programmers can construct new programs quicker through the use of multiple libraries and reusable code.
- Easily upgradable and scalable: Programmers can implement system functionalities independently.
- Security: Using encapsulation and abstraction, complex code is hidden, software maintenance is easier and internet protocols are protected.
- Flexibility: Polymorphism enables a single function to adapt to the class it is placed in. Different objects can also pass through the same interface.

### **Look for disadvantages of this paradigm.**

- Can be inefficient: Object-oriented programming tends to use more CPU than alternative options.
- Not begginer-firendly: Object-oriented programming does require a steep learning curve, but it can also be an investment into future projects.
