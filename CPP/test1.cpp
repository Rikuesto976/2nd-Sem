#include <iostream>
using namespace std;
class height
    {
            int ft, in;
        public:
            void input();
            void display();
            height add(height h1, height h2);
    };
void height::input()
    {
        cout<<"Enter height in ft and in: "<<endl;
        cin>>ft>>in;
    }
void height::display()
    {
        cout<<"Total height: "<<ft<<"ft and "<<in<<"in"<<endl;
    }
height height::add(height h1, height h2)
    {
        height h;
        h.in = h1.in + in;
        h.ft = h.in/12;
        h.in = h.in%12;
        h.ft = h.ft + h1.ft + ft;
        return h;
    }
int main()
{
    height o1, o2, o3;
    o1.input();
    o2.input();
    o3 = o2.add(o1, o2);
    o3.display();
    return 0;
}