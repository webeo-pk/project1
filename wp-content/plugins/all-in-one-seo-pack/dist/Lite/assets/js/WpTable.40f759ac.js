import{k}from"./index.5a710757.js";import{u as C}from"./ScrollTo.97c9805f.js";import{g as t,f as K,y as M}from"./runtime-dom.esm-bundler.6789c400.js";const E=(d={})=>{const{changeItemsPerPageSlug:c,fetchData:h,orderBy:P,orderDir:y,pageNumber:b,resetSelectedFilters:T=()=>{},resultsPerPage:_,selectedFilters:m,slug:S,tableId:D,tableRef:i,wpTableLoading:F}=d,v=t("all"),o=P||t(null),f=y||t(null),a=b||t(1),s=t(_||20),u=t(null),g=m||t(null),L=t(0),l=F||t(!1),p=k(),x=C().scrollTo,A=()=>(l.value=!0,r().then(()=>{l.value=!1,i==null||i.editRow(null)})),B=({filters:e,term:n=null,number:j=null})=>{l.value=!0,g.value=e,u.value=n??u.value,a.value=j??a.value,r(e).then(()=>l.value=!1)},I=e=>{var n;typeof e=="object"&&(e=(n=e==null?void 0:e.target)==null?void 0:n.value),a.value=1,u.value=e,l.value=!0,r().then(()=>l.value=!1)},w=e=>{a.value=e,l.value=!0,r().then(()=>l.value=!1)},N=e=>{v.value=e.slug,u.value=null,a.value=1,l.value=!0,T(),r().then(()=>l.value=!1)},O=e=>{a.value=1,s.value=e,l.value=!0,p.changeItemsPerPage({slug:c,value:e}).then(()=>r().then(()=>x(D))).then(()=>l.value=!1)},R=(e,n)=>(n.target.blur(),o.value=e.slug,f.value=o.value!==e.slug?e.sortDir:e.sortDir==="asc"?"desc":"asc",l.value=!0,r().then(()=>l.value=!1)),W=K(()=>a.value===1?0:(a.value-1)*s.value),r=(e=g.value)=>h({slug:S,orderBy:o.value,orderDir:f.value,limit:s.value,offset:W.value,searchTerm:u.value,filter:v.value,additionalFilters:e});return M(()=>{c&&(s.value=p.settings.tablePagination[c]||s.value)}),{filter:v,orderBy:o,orderDir:f,pageNumber:a,processAdditionalFilters:B,processChangeItemsPerPage:O,processFetchTableData:r,processFilterTable:N,processPagination:w,processSearch:I,processSort:R,refreshTable:A,resultsPerPage:s,searchTerm:u,selectedFilters:g,wpTableKey:L,wpTableLoading:l}};export{E as u};
