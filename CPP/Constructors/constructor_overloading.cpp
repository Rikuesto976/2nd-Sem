#include <iostream>
using namespace std;
class construct
{
    private:
        int x,y;
    public:
        construct();
        construct(int a, int b);
        void display();
};
construct::construct()
{
    x=2,y=9;
}
construct::construct(int a, int b)
{
    x=a, y=b;
}
void construct::display()
{
    cout<<"X= "<<x<<endl;
    cout<<"Y= "<<y<<endl;
}
int main()
{
    construct c1, c2(30,2);
    c1.display();
    c2.display();
    return 0;
}
