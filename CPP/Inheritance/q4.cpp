#include <iostream>
using namespace std;
class Person
{
    protected:
        char name[20];
        int age;
    public:
        void setPerson()
        {
            cout<<"Enter Name and Age: "<<endl;
            cin>>name>>age;
        }        
        void displayPerson()
        {
            cout<<name<<"\t"<<age<<"\t";
        }
};
class Student:public Person
{
    int roll, marks;
    public:
        void setStudent()
        {
            cout<<"Enter roll num and marks:"<<endl;
            cin>>roll>>marks;
        }
        void displayStudent()
        {
            cout<<roll<<"\t"<<marks<<endl;
        }
};
class Employee:public Person
{
    int id, sal;
    public:
        void setEmployee()
        {
            cout<<"Enter employee id and salary:"<<endl;
            cin>>id>>sal;
        }
        void displayEmployee()
        {
            cout<<id<<"\t"<<sal<<endl;
        }
};
int main()
{
    Student s;
    Employee e;
    s.setStudent();
    s.displayStudent();

    e.setEmployee();
    e.displayEmployee();

    return 0;
}