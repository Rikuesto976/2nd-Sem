#include <iostream>
#include <cstring>
using namespace std;

class Media
{
    protected:
        char title[20];
        int price;
    public:
        Media(int x, char *y)
        {
            price =x;
            strcpy(title, y);
        }
        virtual void display()=0;
};

class Book:public Media
{
    private:
        int page;
    public: 
        Book(int z, char *t, int p) : Media(z,t)
        { 
            page = p;
        }

        void display()
        {
            cout<<"Title of Book: " << title <<endl;
            cout<<"Price of Book: " << price <<endl;
            cout<<"Pages of Book: " << page <<endl;
        }
};

class Tape:public Media
{
    private:
        int record;
    public: 
        Tape(int a, char *b, int r):Media(a,b)
        {
            record=r;
        }

        void display()
        {
            cout<<"Title of Tape: "<<title<<endl;
            cout<<"Price of Tape: "<<price<<endl;
            cout<<"Play Time of Tape: "<<record<<endl;
        }
};

int main()
{
    Media *ptr;

    Book b(1500, "Harry Potter", 750);
    ptr = &b;
    ptr ->display();

    Tape t(320, "Harry Potter Tape", 50);
    ptr = &t;
    ptr->display();

    return 0;
}