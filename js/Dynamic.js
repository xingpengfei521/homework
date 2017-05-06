/**
 * Created by lanou3g on 17/5/6.
 */
var removeSVG = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 22 22" style="enable-background:new 0 0 22 22;" xml:space="preserve"><rect class="noFill" width="22" height="22"/><g><g><path class="fill" d="M16.1,3.6h-1.9V3.3c0-1.3-1-2.3-2.3-2.3h-1.7C8.9,1,7.8,2,7.8,3.3v0.2H5.9c-1.3,0-2.3,1-2.3,2.3v1.3c0,0.5,0.4,0.9,0.9,1v10.5c0,1.3,1,2.3,2.3,2.3h8.5c1.3,0,2.3-1,2.3-2.3V8.2c0.5-0.1,0.9-0.5,0.9-1V5.9C18.4,4.6,17.4,3.6,16.1,3.6z M9.1,3.3c0-0.6,0.5-1.1,1.1-1.1h1.7c0.6,0,1.1,0.5,1.1,1.1v0.2H9.1V3.3z M16.3,18.7c0,0.6-0.5,1.1-1.1,1.1H6.7c-0.6,0-1.1-0.5-1.1-1.1V8.2h10.6V18.7z M17.2,7H4.8V5.9c0-0.6,0.5-1.1,1.1-1.1h10.2c0.6,0,1.1,0.5,1.1,1.1V7z"/></g><g><g><path class="fill" d="M11,18c-0.4,0-0.6-0.3-0.6-0.6v-6.8c0-0.4,0.3-0.6,0.6-0.6s0.6,0.3,0.6,0.6v6.8C11.6,17.7,11.4,18,11,18z"/></g><g><path class="fill" d="M8,18c-0.4,0-0.6-0.3-0.6-0.6v-6.8c0-0.4,0.3-0.6,0.6-0.6c0.4,0,0.6,0.3,0.6,0.6v6.8C8.7,17.7,8.4,18,8,18z"/></g><g><path class="fill" d="M14,18c-0.4,0-0.6-0.3-0.6-0.6v-6.8c0-0.4,0.3-0.6,0.6-0.6c0.4,0,0.6,0.3,0.6,0.6v6.8C14.6,17.7,14.3,18,14,18z"/></g></g></g></svg>';
var NOdoneSVG = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 22 22" style="enable-background:new 0 0 22 22;" xml:space="preserve"><rect y="0" class="noFill" width="22" height="22"/><g><path class="fill" d="M9.7,14.4L9.7,14.4c-0.2,0-0.4-0.1-0.5-0.2l-2.7-2.7c-0.3-0.3-0.3-0.8,0-1.1s0.8-0.3,1.1,0l2.1,2.1l4.8-4.8c0.3-0.3,0.8-0.3,1.1,0s0.3,0.8,0,1.1l-5.3,5.3C10.1,14.3,9.9,14.4,9.7,14.4z"/></g></svg>️';
document.getElementById('Bg').addEventListener('click',function(){
    var value = document.getElementById('item').value;
    if(value){
        //让他的value等于西面添加内容的innerHTML;
        appendTO(value);
        document.getElementById('item').value = '';
    }

})
//封装个能让value传进下面内容里面的函数
function appendTO(text){
    var list = document.getElementById('date');
    //创建li
    var item = document.createElement('li');
    item.innerHTML = text;
//    创建之前设置div跟类名buttons
    var buttons = document.createElement('div');
    buttons.classList.add('buttons');
    //创建垃圾箱的li
    var remove = document.createElement('button');
    remove.classList.add('remove');
    remove.innerHTML = removeSVG;
    //添加删除的点击事件//添加删除的点击事件
    remove.addEventListener('click',removeTO);
    //创建未完成的li
    var NOdone = document.createElement('button');
    NOdone.classList.add('NOdone');
    NOdone.innerHTML = NOdoneSVG;
    // console.log(NOdone);

    NOdone.addEventListener('click',NOdoneTO);
    buttons.appendChild(remove);
    buttons.appendChild(NOdone);
    item.appendChild(buttons);
    // console.log(item);
    //讲要添加的东西一直放到第一位.
    list.insertBefore(item,list.childNodes[0]);
}
//封装个removeTO的函数用来删除创建出来的东西.
function removeTO(){
    //获取到li
    var item = this.parentNode.parentNode;
    // console.log(item);
    //获取到li的父级
    var parent = item.parentNode;
    // console.log(parent);
    //删除li
    parent.removeChild(item);
}
function NOdoneTO(){
    var item = this.parentNode.parentNode;
    var parent = item.parentNode;
    console.log(parent);
    var id = parent.id;
    console.log(id);
         
    var target = (id === 'date')?document.getElementById('done'):document.getElementById('date');
    //删除已点完成的列表
    parent.removeChild(item);
    // console.log(target);
    //再将删除的添加到完成的列表队列中去
    target.insertBefore(item,target.childNodes[0]);
}