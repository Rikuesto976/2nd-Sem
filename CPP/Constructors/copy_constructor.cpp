#include <iostream>
using namespace std;
class construct
{
    private:
        int x,y;
    public:
        construct()
            {
                x=3, y=9;
            }
        construct (construct &i)            // "i" is object name
            {
                x=i.x,  y=i.y;
            }
        void display()
            {
                cout<<x<<endl;
                cout<<y<<endl;
            }
};
int main()
{
    construct c1;
    construct c2(c1);           //there are 2 ways to copy constructor
    construct c3=c1;
    c1.display();
    c2.display();
    c3.display();
    return 0;
}
