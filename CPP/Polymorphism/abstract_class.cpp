#include <iostream>
using namespace std;
class Book
{
    public:
        virtual void display();
};

class Math: public Book
{
    public:
        void display()
        {
            cout<<"I am Math Book."<<endl;
        }
};

class Oop: public Book
{
    public:
        void display()
        {
            cout<<"I am OOP Book."<<endl;
        }
};

int main()
{
    Book *ptr[2];
    Math m; Oop o;
    ptr[0] = &m;
    ptr[1] = &o;

    ptr[0]->display();
    ptr[1]->display();

    return 0;
}