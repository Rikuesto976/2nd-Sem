//wap to create a class named Person which has name and address as data member functions to read and display its data.
//create another class Student derived from class Person to use features of base class. the class Student also has age and 
//roll as its own data member and methods.
#include <iostream>
using namespace std;
class Person
{
    protected:
        char name[20], address[20];                 //declare variables in Protected mode if it is to be inherited
    public:
    void input_1()
        {
            cout<<"Enter Name and Address: "<<endl;
            cin>>name>>address;
        }
    void display_1()
        {
            cout<<name<<"\t"<<address<<"\t";     
        }   
};
class Student:public Person
{
        int age, roll;                              //the variables can be declared by either Private or Protected modes:
    public:
        void input_2()
            {
                cout<<"Enter roll and age: "<<endl;
                cin>>roll>>age;
            }
        void display_2()
            {
                cout<<roll<<"\t"<<age<<endl;
            }
};
int main()
{
    Student s;
    s.input_1();
    s.input_2();
    s.display_1();
    s.display_2();
    return 0;
}